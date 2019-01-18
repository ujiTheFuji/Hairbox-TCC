@extends('layouts.app', ['current' => 'produto'])

@section('css')
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('css/verproduto.css')}}">
@endsection
@section('content')
    <section id="f-section">
        <div class="container">
            <div class="image-group">
                <div id="image1" class="image-content"></div>
                <div id="image2" class="image-secundary"></div>
            </div>
            <div class="info-group">
                <div class="info-title-group">
                    <h1 class="info-title"> {{$prod->nome_prod}}</h2>
                    <span class="info-brand">{{$prod->marca_prod}}</span>
                </div>
                <div class="info-text">
                    {{$prod->desc_prod}}
                </div>
                <form class="btn-group" method="POST" action="{{route('salvar_item')}}">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$prod->id}}">
                    <a href="{{route('produtos')}}" class="back btn"> Voltar para os produtos </a>
                    <button class="success btn">Adicionar ao carrinho</button>
                </form>
            </div>
        </div>
    </section>
@endsection
@section('javascript')
    <script>
        var image1 = "/storage/{{$prod->imagem->imagem_um}}";
        var image2 = "/storage/{{$prod->imagem->imagem_dois}}";
    </script>
    <script src="{{asset('js/verProduto.js')}}"></script>
@endsection