@extends('layouts.app', ['current' => 'index'])

@section('css')
    <meta name="csrf-token" content="{{csrf_token()}}"> 
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/banner.css')}}">
@endsection

@section('login')
    @component('components.login')
        @slot('index')
            @if ($errors->any())
                <script>
                    localStorage.setItem("error", "Email ou senha incorreta, digite novamente.");
                    window.location = "{{route('login-page')}}";
                </script>
            @endif
        @endslot
    @endcomponent
@endsection

@section('banner')
    @component('components.banner', ['slide' => 'slide'])
        @slot('texto')
            <span class="title-banner">assine <br/> agora</span>
            <div class="desc-banner">e receba os produtos em sua casa</div>
        @endslot
        @slot('botao')
        <div class="btn-control" data-js="login">
            <a href="#" class="btn-login"> Entre agora </a>
        </div>
        @endslot
    @endcomponent
@endsection

@section('content')
<section id="how-works">
  <h2 class="title-how-works">
    Como funciona?
  </h2>
  <div class="work-container">
    <div class="work-steps">
      <div class="work-image"></div>
      <span class="work-text">
         Escolha um de nossos planos e selecione seus produtos preferidos...
      </span>
    </div>

    <div class="work-steps">
      <div class="work-image"></div>
      <span class="work-text">
         Contamos com diversas formas para você pagar.
      </span>
    </div>

    <div class="work-steps">
      <div class="work-image"></div>
      <span class="work-text">
         Receba os produtos que você escolheu todos os meses em sua casa.
      </span>
    </div>
  </div>
</section>
<section id="plans">
    <span style="display:none">{{$promo=0}}</span>
  <h2 class="title-plans"> Planos </h2>
    <div class="kind-group">
        @foreach($assinaturas as $ass)
        <div class="kind-container">
            <div class="kind-card">
                <div class="kind-front">
                    <div class="more"></div>
                </div>
                <div class="kind-back">
                    <h3 class="plan-title"> {{ $ass->nome }} </h3>
                    <span class="plan-item"> {{$ass->minimo}} a {{ $ass->quantidade }} produtos </span>
                    <span class="plan-renov"> Renovação automatica </span>
                    <div class="plan-price"> R$ {{$ass->preco - 0.01 }}</div>
                    <div class="plan-discount">{{ $promo += 5 }}% OFF</div>
                    <a href="{{route('register')}}" class="plan-link">Assinar</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection

@section('javascript')
        <script src="{{asset('js/index.js')}}"></script>
        <script src="{{asset('js/login.js')}}"></script>
        <script src="{{asset('js/loginpage.js')}}"></script>
        <script src="{{asset('js/banner.js')}}"></script>
@endsection