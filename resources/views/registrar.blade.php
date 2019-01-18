@extends('layouts.app', ['current' => 'register'])

@section('css')
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <link rel="stylesheet" href="{{asset('css/alerta.css')}}">
@endsection

@section('login')
    @component('components.login')
    @slot('index')
            <!-- @if ($errors->any())
                <script>
                    localStorage.setItem("error", "Email ou senha incorreta, digite novamente.");
                    window.location = "{{route('login-page')}}";
                </script>
            @endif -->
        @endslot
    @endcomponent
@endsection

@section('content')
<section id="f-section">
    <h1 class="title">
        Criar uma nova conta no Hairbox.
    </h1>
    <div class="container">
        <form action="{{route('create')}}" method="POST">
            <div class="form-group">
                {{csrf_field()}}
                <div class="input-group">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" id="name" class="form-input">
                </div>

            @if ($errors->any())
                <div class="input-group error">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" id="email" class="form-input" required>
                    <div class="error-message">
                        {{$errors->first('email')}}
                    </div>
                </div>
            @else
                <div class="input-group">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" id="email" class="form-input" required>
                </div>
            @endif


                <div class="input-group">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" name="password" id="password" class="form-input">
                </div>
                <div class="input-group">
                    <label for="confirm" class="form-label">Confirmar senha</label>
                    <input type="password" id="confirm" name="password_confirmation" class="form-input">
                </div>
                <div class="input-group">
                    <label for="secreta" class="form-label">Palavra secreta</label>
                    <input type="text" id="secreta" name="secreta" class="form-input">
                </div>
                <div class="input-group">
                    <label  class="form-label">CEP</label>
                    <input type="text" name="cep" class="form-input" id="CEP">
                </div>

                <div class="input-group" data-js="data-CEP">
                    <label  class="form-label">Estado</label>
                    <input type="text" class="form-input" id="uf" name="estado">
                </div>
                <div class="input-group" data-js="data-CEP">
                    <label  class="form-label">Cidade</label>
                    <input type="text" class="form-input" id="cidade" name="cidade">
                </div>
                <div class="input-group" data-js="data-CEP">
                    <label  class="form-label">Bairro</label>
                    <input type="text" class="form-input" id="bairro" name="bairro">
                </div>
                <div class="input-group" data-js="data-CEP">
                    <label  class="form-label">Rua</label>
                    <input type="text" class="form-input" id="rua" name="rua">
                </div>
            </div>
            <h1 class="title">
                Escolha sua assinatura.
            </h1>
            <div class="form-group">    
                <input type="hidden" name="box" id="box" class="form-input">
                <div class="ballon-group">
                    <div class="ballon">
                        Beauty box
                    </div>
                    <div class="ballon">
                        Powerful box
                    </div>
                    <div class="ballon">
                        Beautiful box
                    </div>
                    <div class="ballon">
                        Profissional
                    </div>
                </div>
                <h4 class="promo-title">Quantidade Produtos</h4>
                <div class="promo-group">
                    <div class="promo-text">1 a 4</div>
                    <div class="promo-text">5 a 8</div>
                    <div class="promo-text">9 a 12</div>
                    <div class="promo-text">13 a 25</div>
                </div>
                <h4 class="promo-title">Desconto</h4>
                <div class="promo-group">
                    <div class="promo-text">5%</div>
                    <div class="promo-text">10%</div>
                    <div class="promo-text">15%</div>
                    <div class="promo-text">20%</div>
                </div>
                <h4 class="promo-title">Preço</h4>
                <div class="promo-group last">
                    <div class="promo-text">R$ 49,90</div>
                    <div class="promo-text">R$ 79,90</div>
                    <div class="promo-text">R$ 124,90</div>
                    <div class="promo-text">R$ 399,90</div>
                </div>
            </div>
            <h1 class="title">
                Escolha a forma de pagamento.
            </h1>
            <div class="form-group">
                <div class="card-method">
                    <div class="card-group">
                        <label for="master" class="card-label">
                            <div class="card-image master"></div>
                        </label>
                        <input id="master" type="radio" name="card" value="Master card">
                    </div>
                    <div class="card-group">
                        <label for="visa" class="card-label">
                            <div class="card-image visa"></div>
                        </label>
                        <input id="visa" type="radio" name="card" value="Visa">
                    </div>
                    <div class="card-group">
                        <label for="diners" class="card-label">
                            <div class="card-image diners"></div>
                        </label>
                        <input id="diners" type="radio" name="card" value="Diners club">
                    </div>
                    <div class="card-group">
                        <label for="american" class="card-label">
                            <div class="card-image american"></div>
                        </label>
                        <input id="american" type="radio" name="card" value="American Express">
                    </div>
                    <div class="card-group">
                        <label for="hipercard" class="card-label">
                            <div class="card-image hipercard"></div>
                        </label>
                        <input id="hipercard" type="radio" name="card" value="Hipercard">
                    </div>
                    <div class="card-group">
                        <label for="elo" class="card-label">
                            <div class="card-image elo"></div>
                        </label>
                        <input id="elo" type="radio" name="card" value="ELO">
                    </div>
                    <div class="input-group">
                        <label for="name-card" class="form-label">Nome Completo</label>
                        <input name="nameCard" type="text" id="name-card" class="form-input"> 
                    </div>
                    <div class="input-group">
                        <label for="nasc" class="form-label">Data de nascimento</label>
                        <input name="nascCard" type="text" id="nasc" class="form-input"> 
                    </div>
                    <div class="input-group">
                        <label for="cpf" class="form-label">CPF</label>
                        <input name="cpfCard" type="text" id="cpf" class="form-input"> 
                    </div>
                    <div class="input-group">
                        <label for="tele" class="form-label">Número do telefone</label>
                        <input name="teleCard" type="text" id="tele" class="form-input"> 
                    </div>
                    <div class="input-group">
                        <label for="numcartao" class="form-label">Número do cartão </label>
                        <input name="numCard" type="text" id="numcartao" class="form-input"> 
                    </div>
                    <div class="input-group">
                        <label for="dataexp" class="form-label">Data de expiração (mês/ano)</label>
                        <input name="expCard" type="text" id="dataexp" class="form-input"> 
                    </div>
                    <div class="input-group">
                        <label for="codseg" class="form-label">Código de segurança </label>
                        <input name="codsegCard" type="text" id="codseg" class="form-input"> 
                    </div>
                    <div class="input-group">
                    <!-- code over internet -->
                        <input class="inp-cbx" id="cbx" type="checkbox" style="display: none;"/>
                        <label class="cbx" for="cbx"><span>
                        <svg width="12px" height="10px" viewbox="0 0 12 10">
                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                        </svg></span><span>Eu aceito os <a class="a-link" href="{{route('termos')}}" target="_blank">termos de uso</a></span></label>
                    <!-- code over internet -->
                    </div>
                </div>    
                <div class="btn-group">
                    <button type="submit" disabled="disabled" class="register-btn"> Assinar </button>
                </div>
            </div>
        </form>
    </div>
</section>
<div class="content-submit-alert">
    <div class="submit-alert">
        <div class="animate-submit-alert"></div>
        <div class="message-submit-alert"> Cadastro feito com sucesso! </div>
        <a href="{{route('index')}}" class="next-submit-alert">Ok!</a>
    </div>
</div>

@endsection

@section('javascript')
    <script src="{{asset('js/login.js')}}"></script>
    <script src="{{asset('js/register.js')}}"></script>
    <script src="{{asset('js/alerta.js')}}"></script>
    <script src="{{asset('js/mask.min.js')}}"></script>
    @if($errors->any())
        <script>
            $(document).ready(function(){
                alerta('#f-section', 'Este email já esta sendo usado.');
            });
        </script>
    @endif
@endsection
