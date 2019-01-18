<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/logo-icon.png')}}" />
        <link rel="stylesheet" href="{{asset('css/layout.css')}}">
        @hasSection('css')
            @yield('css')
        @endif
        <title>Hairbox</title>
        <style>
            @font-face{
                font-family: 'Strawberry blossom';
                src: url("{{asset('font/StrawberryBlossom.otf')}}");
            }
            body{
                margin: 0;
                font-family: 'century gothic';
            }
        </style>
    </head>
    <body class="hidden">
        <div id="preloader">
            <div class="pre-image"></div>
        </div>
        <header id="header">
            <div class="menu">
                <a href="{{route('index')}}"><div class="logo"></div></a>
                <nav class="links">
                <div class="menu-icon">
                    <div class="line l1 no-animation"></div>
                    <div class="line l2 no-animation"></div>
                    <div class="line l3 no-animation"></div>
                </div>
                <ul class="list">
            @guest
                @if($current == 'index')
                    <li class="item">
                        <a href="{{ route('faq') }}"  @if($current == "faq") class="link off" @else class="link" @endif> FAQ </a>
                    </li>
                    <li class="item">
                        <a href="#how-works" class="link">Como Funciona</a>
                    </li>
                    <li class="item">
                        <a href="#plans" class="link">Planos</a>
                    </li>
                    <li class="item">
                    <button class="link" data-js="login">Entrar / Criar conta</button>
                    </li>
                @elseif($current == 'register' || $current == 'termos' || $current == 'faq')
                    <li class="item">
                        <a href="{{ route('faq') }}"  @if($current == "faq") class="link off" @else class="link" @endif> FAQ </a>
                    </li>
                    <li class="item">
                        <a href="/" class="link"> Voltar para o inicio </a>
                    </li>
                    <li class="item">
                    <button class="link" data-js="login">Entrar / Criar conta</button>
                    </li>
                @elseif($current == 'blank' || $current == 'faq')
                    <li class="item">
                        <a href="/" class="link"> Voltar para o inicio </a>
                    </li>
                @endif
            @endguest
            @auth
                @if($current != 'admin')
                    <li class="item">
                        <a href="{{ route('faq') }}"  @if($current == "faq") class="link off" @else class="link" @endif> FAQ </a>
                    </li>
                    <li class="item">
                        <a href="{{ route('perfil') }}"  @if($current == "perfil") class="link off" @else class="link" @endif> Perfil </a>
                    </li>
                    <li class="item">
                        <a data-js="buy" href="{{ route('produtos') }}"  @if($current == "produtos") class="link off" @else class="link" @endif> Loja </a>
                    </li>
                    <li class="item">
                        <a data-js="buy" href="{{ route('carrinho') }}"  @if($current == "carrinho") class="link off" @else class="link" @endif> Carrinho </a>
                    </li>
                    <li class="item">
                        <a href="{{ route('logout') }}" class="link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Sair
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @else
                    <li class="item">
                        <a href="{{ route('logout') }}" class="link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Sair
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endif
            @endauth
                </ul>
                </nav>
            </div>
            @hasSection('login')
                @yield('login')
            @endif
        </header>
        @hasSection('banner')
            @yield('banner')
        @endif

        @yield('content')

        <footer id="footer">
            <span class="footer-copyright">@  2018 - <a @if($current == "termos") class="termos t-off" @else class="termos" @endif href="{{route('termos')}}"> Todos os direitos reservados </a> </span>
            <div class="logo-footer yout"></div>
            <div class="logo-footer face"></div>
            <div class="logo-footer insta"></div>
        </footer>

        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/menu.js')}}"></script>
        @hasSection('javascript')
            @yield('javascript')
        @endif
    </body>
</html>