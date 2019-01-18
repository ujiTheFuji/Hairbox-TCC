@extends('layouts.app', ["current" => "carrinho"])

@section('css')
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('css/carrinho.css')}}">
    @foreach($info as $infos)
        @foreach($infos->carrinhos as $prods)
    <style>
        .trbody:nth-child({{$loop->iteration}}) .prod .product-image{
            background-image: url('/storage/{{$prods->imagem->imagem_um}}');
        }
        .trbody:nth-child({{$loop->iteration}}) .prod .product-image:hover{
            background-image: url('/storage/{{$prods->imagem->imagem_dois}}');
        }
    </style>
        @endforeach
    @endforeach
@endsection

@section('content')
    <form action="{{route('mandar_item')}}" class="container">
        <div class="product-group">
    @foreach($info as $infos)
        @if(count($infos->carrinhos) == 0 )
            <h3 class="void-title"> Você ainda não tem nada no carrinho </h3>
        @else
            <table class="table">
                <thead class="thead">
                    <tr>
                        <input name="userID" type="hidden" value="{{$info[0]->id}}" id="userId">
                        <td class="td head">Produto</td>
                        <td class="td head">Quantidade</td>
                    </tr>
                </thead>
                <tbody class="tbody">
            @foreach($infos->carrinhos as $prods)
                    <tr class="trbody">
                        <td class="td prod">
                            <div class="product-image"></div>
                            <div class="product-group-text">
                                <h3 class="product-title">{{$prods->nome_prod}}</h3>
                                <span class="product-text">{{$prods->desc_prod}}</span>
                            </div>
                        </td>
                        <td class="td body">
                            <input name="prod[]" class="prod_id" type="hidden" value="{{$prods->pivot->produto_id}}">
                            <button class="btn up">/\</button>
                            <span class="btn-text">{{$prods->pivot->quant_prod}}</span>
                            <button class="btn down">\/</button>
                            <button class="del">X</button>
                            <input name="quant[]" type="hidden" id="input-quant" value="{{$prods->pivot->quant_prod}}">
                        </td>
                    </tr>
            @endforeach
        @endif
    @endforeach
                </tbody>
            </table>
        </div>
        <div class="buy-group">   
            <h4 class="info-name">{{$info[0]->name}}</h4>
            <div class="info-endereco">
                <div class="input-group">
                    <label for="state" class="info-label">Estado: </label>
                    <input name="estado" id="state" type="text" class="info num" readonly>
                </div>
                <div class="input-group">
                    <label for="city" class="info-label">Cidade: </label>
                    <input name="cidade" id="city" type="text"  class="info cidade" readonly>
                </div>
                <div class="input-group">
                    <label for="neigh" class="info-label">Bairro: </label>
                    <input name="bairro" id="neigh" type="text"  class="info bairro" readonly>
                </div>
                <div class="input-group">
                    <label for="street" class="info-label">Rua: </label>
                    <input name="rua" id="street" type="text"  class="info rua" readonly>
                </div>
                <div class="input-group">
                    <label for="state" class="info-label">Numero da casa: </label>
                    <input name="num" id="state" type="text" class="info num" readonly>
                </div>
                <div class="input-group">
                    <label for="state" class="info-label">Complemento: </label>
                    <input name="comp" id="state" type="text" class="info num" readonly>
                </div>
                <div class="btn-group">
                    <button id="edit" class="info-edit"> Editar </button>
                    <button class="info-edit" data-js="send"> Finalizar compra </button>
                </div>
            </div>
        </div>
    </form>
@endsection


@section('javascript')
    <script src="{{asset('js/carrinho.js')}}"></script>
    <script>
        var limite = '{{$limite}}';
        var minimo = '{{$minimo}}';
        var cep = '{{$info[0]->cep}}';
        $.getJSON('https://viacep.com.br/ws/'+ cep + '/json/', function(data){
            $('#city').val(data.localidade);
            $('#neigh').val(data.bairro);
            $('#street').val(data.logradouro);
            $('#state').val(data.uf);
        })
    </script>
@endsection