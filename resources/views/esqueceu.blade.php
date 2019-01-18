@extends('layouts.app', ['current' => 'blank'])

@section('css')
    <link rel="stylesheet" href="{{asset('css/esqueceu.css')}}">
    <link rel="stylesheet" href="{{asset('css/alerta.css')}}">
    <meta name="csrf-token" content="{{CSRF_TOKEN()}}">
@endsection

@section('content')
    <section class="container">
        <h1 class="title">Recuperação de conta.</h1>
        <form action="{{route('recuperar')}}" class="form">
            <div class="input-group">
                <label for="mail" class="form-label">Email</label>
                <input type="email" name="email" id="mail" class="form-inputo">
            </div>
            <div class="input-group">
                <label for="secret" class="form-label">Palavra secreta</label>
                <input type="text" name="secreta" id="secret" class="form-inputo">
            </div>
            <div class="input-group" data-js="req-newPass">
                <label for="nova" class="form-label">Nova senha</label>
                <input type="password" name="password" id="nova" class="form-inputo">
            </div>
            <div class="input-group" data-js="req-newPass">
                <label for="confirmar" class="form-label">Confirmar a nova senha</label>
                <input type="password" name="newPassword" id="confirmar" class="form-inputo">
            </div>
            <input type="submit" value="Enviar" class="btn-form">    
        </form>
    </section>
@endsection

@section('javascript')
    <script src="{{asset('js/esqueceu.js')}}"></script>
    <script src="{{asset('js/alerta.js')}}"></script>
@endsection