<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Produto;
use App\Correio;
use App\User;
use App\Imagem_produto;

class AdminController extends Controller
{
    public function index(){
        
        return view('admin', compact('produto'));
    }


    public function indexjs(){
        $produto = Produto::paginate(5);
        $correio = Correio::with(['usuarios', 'produtos'])->paginate(5);
        $user = User::with(['assinaturas'])->paginate(5);
        return [
            'produtos' => $produto,
            'correios' => $correio,
            'usuarios' => $user
        ];
    }

    public function search(Request $req){
        $table = $req->input('tabela');
        $tipo = $req->input('tipo');
        $pesq = $req->input('nome');
        if($table == 'Usuários'){
            if( $tipo == 'tudo')
                $alt = User::with(['assinaturas'])
                ->orWhereHas(
                    'assinaturas', function($query) use($pesq){
                        $query->where('nome', '=', $pesq);
                    }
                )
                ->orWhere('name', $pesq )
                ->orWhere('email', $pesq )
                ->orWhere('cep', $pesq )
                ->orWhere('estado', $pesq )
                ->orWhere('cidade', $pesq )
                ->orWhere('bairro', $pesq )
                ->orWhere('rua', $pesq )
                ->paginate(5);
            else if($tipo == "assinaturas"){
                $alt = User::with(['assinaturas'])
                ->whereHas(
                    $tipo, function($query) use($pesq){
                        $query->where('nome', '=', $pesq);
                    }
                )
                ->paginate(5);
            }
            else
                $alt = User::with(['assinaturas'])->where($tipo, $pesq )->paginate(5);
        }
        else if($table == 'Produtos'){
            if( $tipo == 'tudo'){
                $alt = Produto::orWhere('nome_prod', $pesq )
                ->orWhere('tipo_prod', $pesq )
                ->orWhere('marca_prod', $pesq )
                ->paginate(5);
            }
            else
                $alt = Produto::where($tipo, $pesq )->paginate(5);
        }
        else if($table == 'Entregas'){
            if ($tipo == 'tudo')
                $alt = Correio::with(['usuarios', 'produtos'])
                ->orWhereHas(
                    'usuarios' , function($query) use($pesq) {
                        $query->where('name', '=' , $pesq);
                    }
                )->orWhereHas(
                    'produtos' , function($query) use($pesq){
                        $query->where('nome_prod', '=', $pesq);
                     }
                )
                ->orWhere('estado', $pesq)
                ->orWhere('cidade', $pesq)
                ->orWhere('bairro', $pesq)
                ->orWhere('rua', $pesq)
                ->orWhere('numero', $pesq)
                ->orWhere('complemento', $pesq)
                ->orWhere('etapa', $pesq)
                ->paginate(5);
            else if ($tipo == 'usuarios')
                $alt = Correio::with(['usuarios','produtos'])
                ->whereHas(
                    $tipo, function($query) use($pesq){
                        $query->where('name', '=', $pesq);
                    }
                )
                ->paginate(5);
            else if ($tipo == 'produtos')
                $alt = Correio::with(['usuarios','produtos'])
                ->whereHas(
                    $tipo, function($query) use($pesq){
                        $query->where('nome_prod', '=', $pesq);
                    }
                )
                ->paginate(5);
            else
                $alt = Correio::with(['usuarios','produtos'])->where($tipo, $pesq)->paginate(5);
        } 
    
        return $alt;
    }

    public function destroy($table, $id){
        if($table == 'usuario'){
            $user = User::find($id);
            $user->carrinhosDel()->delete();
            $user->correios()->delete();
            $user->cartoes()->delete();
            $user->delete();
        }
        else if($table == 'correio')
            Correio::find($id)->delete();
        else if($table == 'produto')
            Produto::find($id)->delete();
    }

    public function edit(Request $req){
        $prod = Produto::find($req->input('id'));
        $prod->nome_prod = $req->input('nome');
        $prod->tipo_prod = $req->input('tipo');
        $prod->desc_prod = $req->input('desc');
        $prod->marca_prod = $req->input('marca');
        $prod->quant_prod = $req->input('qntd');
        $prod->save();
        
        return $prod;
    }
    
    public function store(Request $req){
        $prod = new Produto();
        $prod->nome_prod = $req->input('nome');
        $prod->tipo_prod = $req->input('tipo');
        $prod->marca_prod = $req->input('marca');
        $prod->desc_prod = $req->input('desc');
        $prod->quant_prod = $req->input('qntd');
        $prod->save();
        $image = new Imagem_produto();
        $image->produto_id = $prod->id;
        $image->imagem_um = $req->file('imagem_um')->store('imagens', 'public');
        $image->imagem_dois = $req->file('imagem_dois')->store('imagens', 'public');
        $image->save();
    }
}
