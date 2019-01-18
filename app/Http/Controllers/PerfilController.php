<?php

namespace App\Http\Controllers;

use App\Correio;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($mensagem = null)
    {
        $usuario = User::find(Auth::id());
        $correio = Correio::where('user_id',Auth::id())->get();

        return view('perfil', compact(['correio','usuario', 'mensagem']));
    }

    public function indexjs(){
        return Correio::with(['produtos', 'imagem'])->where('user_id', Auth::id())->paginate(3);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editAPI(Request $req)
    {
        $user = User::find($req->input('id'));
        if($user->secreta != $req->input('secreta'))
            return ['status' => 'failed', 'error' => 'A palavra secreta está incorreta.'];

        if($req->input('password') != '********')
            $user->password = bCrypt($req->input('password'));
        
        if($req->input('box_id') != $user->box_id)
            User::find($req->input('id'))->carrinhos()->detach();

        $user->name = $req->input('nome');
        $user->estado = $req->input('estado');
        $user->cidade = $req->input('cidade');
        $user->bairro = $req->input('bairro');
        $user->rua = $req->input('rua');
        $user->box_id = $req->input('box_id');
        $user->save();
        return ['status' => 'success', 'data' => $user];
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
    public function destroy(Request $req)
    {
        $user = User::find(Auth::id());
        if($user->secreta == $req->input('secreta')){
            $user->carrinhosDel()->delete();
            $user->correios()->delete();
            $user->cartoes()->delete();
            $user->delete();
        }
        else{
            return redirect()->route('perfil', ['mensagem' => 'error']);
        }
        return redirect()->route('index');
    }
}
