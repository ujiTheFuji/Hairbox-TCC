<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\User;
use Illuminate\Support\Facades\Auth;
class ProdutosController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($mensagem = null)
    {
        $user = User::find(Auth::id());
        if($user->box_id != 4)
            $prod = Produto::orderBy('nome_prod')->whereNotIn('marca_prod', ['INOAR', 'TRESemme'])->paginate(9);
        else
            $prod = Produto::orderBy('nome_prod')->paginate(9);
        return view('produtos', compact(['prod', 'user', 'mensagem']));    
    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tipo, $marca)
    {
        $user = User::find(Auth::id());
        if($user->box_id != 4 && $marca == 'TRESemme' || $marca == 'INOAR')
            return redirect()->route('produtos');
        
        $prod = Produto::where('tipo_prod', $tipo)
        ->where('marca_prod', $marca)
        ->paginate(9);
        return view('produtos', compact('prod', 'user'));
    }
    
    public function search(Request $request)
    {
        $user = User::find(Auth::id());
        $product = Produto::where('nome_prod', $request->input('produto'))
        ->orWhere('tipo_prod', $request->input('produto'))
        ->orWhere('marca_prod', $request->input('produto'));
        
        if($user->box_id != 4)
            $prod = $product->whereNotIn('marca_prod', ['INOAR', 'TRESemme'])->paginate(9);
        else
            $prod = $product->paginate(9);

        return view('produtos', compact('prod', 'user'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function item($id){
        $prod = Produto::find($id);

        return view('verProduto', compact('prod'));
    }
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
