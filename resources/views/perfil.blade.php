@extends('layouts.app', ["current" => "perfil"])

@section('css')
    <link rel="stylesheet" href="{{asset('css/perfil.css')}}">
    <link rel="stylesheet" href="{{asset('css/alerta.css')}}">
    <meta name="csrf-token" content="{{CSRF_TOKEN()}}">
@endsection

@section('content')
    <section class="container">
        <h1 class="title">Perfil</h1>
        <div class="end-content">
            <div class="access-content">
                <h2 id="message" class="sub-title">

                </h2> 
                <span class="limithour"></span>
                <a data-js="buy" href="{{route('produtos')}}" class="a-access"> Acessar a loja </a>
            </div>
            <div class="local-content">
                <h2 class="sub-title">Perfil</h2>
                <form action="">
                    <div class="input-group">
                        <label for="name" class="local-label">Nome:</label>
                        <input id="name" type="text" class="local-input" value="{{$usuario->name}}" readonly>
                    </div>
                    <div class="input-group">
                        <label for="email" class="local-label">Email:</label>  
                        <input  id="email" type="text" class="local-input off" value="{{$usuario->email}}" readonly>
                    </div>
                    <div data-js="hide" class="input-group">
                        <label for="password" class="local-label">Senha:</label>  
                        <input id="senha" autocomplete type="password" id="password" class="local-input" value="********" readonly>
                    </div>
                    <div data-js="pass" class="input-group">
                        <label for="confirm" class="local-label">Confirmar senha:</label>  
                        <input id="confirm" autocomplete type="password" id="confirm" class="local-input" readonly>
                    </div>
                    <div class="input-group">
                        <label for="estado" class="local-label">Estado:</label>   
                        <input  id="estado" type="text" class="local-input" value="{{$usuario->estado}}" readonly>
                    </div>
                    <div class="input-group">
                        <label for="cidade" class="local-label">Cidade:</label>   
                        <input  id="cidade" type="text" class="local-input" value="{{$usuario->cidade}}" readonly>
                    </div>
                    <div class="input-group">
                        <label for="bairro" class="local-label">Bairro:</label>   
                        <input  id="bairro" type="text" class="local-input" value="{{$usuario->bairro}}" readonly>
                    </div>
                    <div class="input-group">
                        <label for="rua" class="local-label">Rua:</label>   
                        <input  id="rua" type="text" class="local-input" value="{{$usuario->rua}}" readonly>
                    </div>
                    <div class="input-group">
                        <label for="assinatura" class="local-label">Assinatura:</label>   
                        <select class="local-input" id="assinatura" name="assinatura"disabled>
                            <option value="1" @if( $usuario->box_id == 1) selected @endif >Beauty Box</option>
                            <option value="2" @if( $usuario->box_id == 2) selected @endif >Super Box</option>
                            <option value="3" @if( $usuario->box_id == 3) selected @endif >Power Box</option>
                            <option value="4" @if( $usuario->box_id == 4) selected @endif >Profissional</option>
                        </select>
                    </div>
                    <div data-js="hide" class="input-group">
                        <label for="secret" class="local-label">Palavra secreta:</label>  
                        <input name="secreta" id="secret" type="text" id="secret" class="local-input" readonly>
                    </div>
                    <div class="image-signature box-{{$usuario->box_id}}"></div>
                    <button data-js="hide" class="btn-link exc">Excluir Conta</button>
                    <button class="btn-link edit">Editar Perfil</button>
                    <div class="btn-group">
                        <button data-js="hide" class="btn cancel">Cancelar</button>
                        <button data-js="hide" class="btn save">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="hist-content">
            <h2 class="sub-title">Histórico de compra</h2>
            <div class="prod-content">

            </div>
            <ul class="page-list">
                
            </ul>
        </div>
    </section>
    <section class="delete-screen">
        <form action="{{route('deletar')}}" class="form-group" method="POST">
            {{csrf_field()}}
            <div class="close"></div>
            <h2 class="delete-title">Você tem certeza que deseja excluir sua conta?</h2>
            <span class="delete-desc"> Digite "Confirmar" para continuar a ação.</span>
            <input type="text" id="delete" class="delete-input">
            <input type="text" name="secreta" class="delete-input" placeholder="Palavra Secreta">
            <button type="submit" class="btn delete">Excluir</button>
        </form>
    </section>
@endsection

@section('javascript')
    @isset($correio)
        <script>
            var time = [];
            @foreach($correio as $c)
                time.push('{{$c->created_at}}');
            @endforeach
            var lastTime = time.sort().slice(-1).join('');
        </script>
    @else
        <script> 
            var lastTime="0"
        </script>
    @endisset
    <script>
        function userData(){
            return {
                id: '{{$usuario->id}}',
                nome: '{{$usuario->name}}',
                estado: '{{$usuario->estado}}',
                cidade: '{{$usuario->cidade}}',
                bairro: '{{$usuario->bairro}}',
                rua: '{{$usuario->rua}}',
                box_id: '{{$usuario->box_id}}',
                secreta: ''
            }
        }
    </script>
    <script src="{{asset('js/alerta.js')}}"></script>
    <script src="{{asset('js/perfil.js')}}"></script>
    @if($mensagem != null)
        <script>
            alerta($('body'), 'A palavra secreta está incorreta.');
        </script>
    @endif
@endsection