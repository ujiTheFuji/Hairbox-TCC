@extends('layouts.app', ["current" => "produtos"])


@section('css')
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('css/produtos.css')}}">
    <link rel="stylesheet" href="{{asset('css/alerta.css')}}">
    @foreach($prod as $prods)
    <style>
        .content:nth-child({{$loop->iteration}}) .content-image{
            background-image: url('/storage/{{$prods->imagem->imagem_um}}');
        }
        .content:nth-child({{$loop->iteration}}) .content-image:hover{
            background-image: url('/storage/{{$prods->imagem->imagem_dois}}');
        }
        </style>
    @endforeach
@endsection

@section('content')
    <section id="section">
    <!-- Banner -->
        <h1 class="title"> Escolha seus produtos</h1>
        <div class="container">
            <aside class="menubar">
                <form class="search-group" method="POST" action="{{route('pesquisar')}}">
                    {{csrf_field()}}
                    <input type="text" class="search-input" name="produto">
                    <button type="submit" class="search-glass"></button>
                </form>
                <ul class="list-menu">
                    <li class="item-menu">
                        <span class="item-title">Shampoo</span>
                        <ul class="sublist-menu">
                        <a class="a-item" href="{{route('prod_especificos', ['tipo' => 'shampoo' , 'marca' => 'Clear men'])}}"><li class="subitem-menu">Clear Men</li></a>
                        <a class="a-item" href="{{route('prod_especificos', ['tipo' => 'shampoo' , 'marca' => 'Salon line'])}}"><li class="subitem-menu">Salon Line</li></a>
                        <a class="a-item" href="{{route('prod_especificos', ['tipo' => 'shampoo' , 'marca' => 'seda'])}}"><li class="subitem-menu">Seda</li></a>
                        @if($user->box_id == 4)
                            <a class="a-item" href="{{route('prod_especificos', ['tipo' => 'shampoo' , 'marca' => 'INOAR'])}}"><li class="subitem-menu">INOAR</li></a>
                            <a class="a-item" href="{{route('prod_especificos', ['tipo' => 'shampoo' , 'marca' => 'TRESemme'])}}"><li class="subitem-menu">TRESemme</li></a>
                        @endif
                        </ul>
                    </li>
                    <li class="item-menu">
                        <span class="item-title">Creme de pentear</span>
                        <ul class="sublist-menu">
                        <a class="a-item" href="{{route('prod_especificos', ['tipo' => 'Creme de pentear' , 'marca' => 'elseve'])}}"><li class="subitem-menu">Elseve</li></a>
                        <a class="a-item" href="{{route('prod_especificos', ['tipo' => 'Creme de pentear' , 'marca' => 'Salon line'])}}"><li class="subitem-menu">Salon Line</li></a>
                        <a class="a-item" href="{{route('prod_especificos', ['tipo' => 'Creme de pentear' , 'marca' => 'seda'])}}"><li class="subitem-menu">Seda</li></a>
                        <a class="a-item" href="{{route('prod_especificos', ['tipo' => 'Creme de pentear' , 'marca' => 'novex'])}}"><li class="subitem-menu">Novex</li></a>
                        </ul>
                    </li>
                    <li class="item-menu">
                        <span class="item-title">Condicionador</span>
                        <ul class="sublist-menu">
                            <a class="a-item" href="{{route('prod_especificos', ['tipo' => 'condicionador' , 'marca' => 'seda' ])}}"><li class="subitem-menu">Seda</li></a>
                            <a class="a-item" href="{{route('prod_especificos', ['tipo' => 'condicionador' , 'marca' => 'Salon line'])}}"><li class="subitem-menu">Salon Line</li></a>
                        @if($user->box_id == 4)
                            <a class="a-item" href="{{route('prod_especificos', ['tipo' => 'condicionador' , 'marca' => 'TRESemme'])}}"><li class="subitem-menu">TRESemme</li></a>
                            <a class="a-item" href="{{route('prod_especificos', ['tipo' => 'condicionador' , 'marca' => 'INOAR' ])}}"><li class="subitem-menu">INOAR</li></a>
                        @endif
                        </ul>
                    </li>
                    <li class="item-menu">
                        <span class="item-title"> Finalizador </span>
                        <ul class="sublist-menu">
                        <a class="a-item" href="{{route('prod_especificos', ['tipo' => 'finalizador' , 'marca' => 'seda'])}}"><li class="subitem-menu">Seda</li></a>
                        <a class="a-item" href="{{route('prod_especificos', ['tipo' => 'finalizador' , 'marca' => 'Salon line'])}}"><li class="subitem-menu">Salon Line</li></a>
                        @if($user->box_id == 4)
                            <a class="a-item" href="{{route('prod_especificos', ['tipo' => 'finalizador' , 'marca' => 'INOAR' ])}}"><li class="subitem-menu">INOAR</li></a>
                        @endif
                        </ul>
                    </li>
                    <li class="item-menu">
                        <span class="item-title"> Creme de Tratamento </span>
                        <ul class="sublist-menu">
                            <a class="a-item" href="{{route('prod_especificos', ['tipo' => 'mascara' , 'marca' => 'Seda'])}}"><li class="subitem-menu">Seda</li></a>
                            <a class="a-item" href="{{route('prod_especificos', ['tipo' => 'mascara' , 'marca' => 'Salon line'])}}"><li class="subitem-menu">Salon Line</li></a>
                        @if($user->box_id == 4)
                            <li class="subitem-menu"><a class="a-item" href="{{route('prod_especificos', ['tipo' => 'mascara' , 'marca' => 'INOAR' ])}}">INOAR</a></li>
                        @endif
                        </ul>
                    </li>
                </ul>
            </aside>
            <div class="content-group">
        @if(count($prod) != 0)
            @foreach($prod as $prods)
                <div class="content">
                    <a class="item-link" href="{{route('item', ['id' => $prods->id ])}}">
                        <div class="content-image"></div>
                        <div class="content-text">
                            <div class="content-title"> {{$prods->nome_prod}} </div>
                            <div class="content-describe">
                                {{$prods->desc_prod}}
                            </div>
                        </div>
                    </a>
                    <button class="content-btn" onclick="addStore({{$prods->id}}, {{$user->id}})">Adicionar ao carrinho</button>
                </div>
            @endforeach
            </div>
        </div>
        @else
            <span class="product-not-found"> Produto não encontrado. <a class="a-not-found" href="{{route('produtos')}}"> Clique aqui </a> para ver todos os produtos</span>
        @endif
            <div class="link-group">
                {{$prod->links()}}
            </div>
    </section>
@endsection

@section('javascript')
    <script src="{{asset('js/alerta.js')}}"></script>
    <script src="{{asset('js/produtos.js')}}"></script>
    
    @if(isset($mensagem) && $mensagem != null)
        <script>
            $(document).ready(function(){
                alerta($('section'), '{{$mensagem}}');
                window.history.pushState('produtos', 'produtos', '/produtos');
            });
        </script>
    @endif
@endsection