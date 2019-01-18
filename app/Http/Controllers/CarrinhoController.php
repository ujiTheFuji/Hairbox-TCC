<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Carrinho;
use App\User;
use App\Produto;
use App\Correio;

use Illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{
    public function canGetItem($id){
        $total = 0;
        $actual = User::find($id)->carrinhos()->get();
        foreach($actual as $a){
            $total += $a->pivot->quant_prod;
        }
        $limit = User::find($id)->assinaturas()->first()->limite;
        if($total < $limit)
            return true;
        else
            return false;
    }

    public function index(){
        $info = User::with(['carrinhos'])->where('id',Auth::id())->get();
        $limite = User::find(Auth::id())->assinaturas()->first()->limite;
        $minimo = User::find(Auth::id())->assinaturas()->first()->minimo;

        return view('carrinho', compact('info', 'limite', 'minimo'));
    }

    public function indexAPI(request $prod){
        
        if($this->canGetItem($prod->user_id)){
            $item = Carrinho::where('user_id', $prod->user_id)->where('produto_id', $prod->produto_id)->get();
            if( count($item) == 0 ){
                $car = new Carrinho();
                $car->user_id = $prod->user_id;
                $car->produto_id = $prod->produto_id;
                $car->quant_prod = $prod->quant_prod;
                $car->save(); 
                $produto = Produto::find($car->produto_id);
                return 'Produto (' . $produto->nome_prod . ') adicionado ao carrinho.';
            }
            else{
                $user = User::find($prod->user_id);
                $dates = $user->carrinhos()->where('produto_id', $prod->produto_id)->first();
                $quant = $dates->pivot->quant_prod + 1;
                $user->carrinhos()->updateExistingPivot($prod->produto_id, ['quant_prod' => $quant] );
                return 'Produto (' . Produto::find($prod->produto_id)->nome_prod . ' ' . $quant . 'x) adicionado ao carrinho.';
            }
        }
        return 'Você excedeu o limite de produtos da sua assinatura';
    }

    public function store(request $req){
        if($this->canGetItem(Auth::id())){
            $prodID = $req->input('id');
            $user = User::find(Auth::id());
            $prod = $user->carrinhos()->where('produto_id', $prodID)->first();
            if(empty($prod)){
                $user->carrinhos()->attach($prodID, ['quant_prod' => 1]);
                $prod = $user->carrinhos()->where('produto_id', $prodID)->first();
            }
            else{
                $quant = $prod->pivot->quant_prod + 1;
                $user->carrinhos()->updateExistingPivot($prodID, ['quant_prod' => $quant] );
            }
            return redirect()->route('produtos', ['mensagem' => 'Produto (' . $prod->nome_prod . ') adicionado ao carrinho.']);
        }
        return redirect()->route('produtos', ['mensagem' => 'Você excedeu o limite de produtos da sua assinatura']);
    }

    public function indexJSON(Request $request, $idUser ,$id){
        $user = User::find($idUser);
        $user->carrinhos()->where('produto_id', $id)->first();
        $user->carrinhos()->updateExistingPivot($id, ['quant_prod' => $request->input('quant_prod')] );
        return json_encode($user);
    }
    
    public function send(Request $req){
        $arrProd = $req->prod;
        foreach($arrProd as $key => $prod){
            $correio = new Correio();
            $correio->user_id = Auth::id();
            $correio->quant_prod = $req->input('quant')[$key];
            $correio->prod_id = $prod;
            $correio->etapa = 'Em verificação';
            $correio->estado = $req->input('estado');
            $correio->cidade = $req->input('cidade');
            $correio->bairro = $req->input('bairro');
            $correio->rua = $req->input('rua');
            $correio->numero = $req->input('num');
            $correio->complemento = $req->input('comp');
            $correio->save();
            $this->destroy(Auth::id(), $prod);
        }
        return redirect('/perfil');
    }
    
    public function destroy($idUser, $id){
        $user = User::find($idUser);
        $user->carrinhos()->detach($id);
        $user->save();
    }
}
