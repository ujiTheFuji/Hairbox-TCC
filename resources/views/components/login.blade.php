<div class="left-screen" data-js="screen"></div>
<div class="right-screen" data-js="screen"></div>
<div class="login-screen" id="login-page">
    <div class="close"></div>
    <div class="logo-flex">
        <div class="logo logo-login"></div>
    </div>
    <!-- Login -->
    <form action="{{route('login')}}" method="POST" class="form-flex">
    {{ csrf_field() }}
    @isset($index)
        {{$index}}
    @endisset
        <span class="login-message"> Conecte-se ao Hairbox! </span>
        <div class="input-group">
            <label for="mail" class="form-label">Email</label>
            <input type="email" name="email" id="mail" class="form-inputo">
        </div>
        <div class="input-group">
            <label for="pass" class="form-label">Senha</label>
            <input type="password" name="password" id="pass" class="form-inputo">
        </div>
        <div class="error">
            @isset($erro)
                {{$erro}}
            @endisset
        </div>
        <input type="submit" value="Entrar" class="btn-form">
        <a href="{{route('esqueceu')}}" class="forget">Esqueceu a senha?</a>
    </form>
    <!-- registrar -->
    <div class="register-flex">
        <span class="register-message"> Registre-se no Hairbox! </span>
        <a href="#" class="register-social face-register">
            Registrar com Facebook
            <div class="logo-face"></div>
        </a>
        <a href="#" class="register-social insta-register">
            Registrar com Instagram
            <div class="logo-insta"></div>
        </a>
        <a href="/registrar" class="register-social new-account">Criar uma nova conta</a>
    </div>
</div>