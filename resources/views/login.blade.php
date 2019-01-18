@extends('layouts.app', ['current' => 'blank'])

@section('css')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/loginpage.css')}}">
@endsection

@section('content')
    @component('components.login')
        @slot('erro')
            @if($errors->any())
                <span class="red">{{$errors->first('email')}}</span>
            @endif
        @endslot
    @endcomponent
@endsection


@section('javascript')
    <script src="{{asset('js/loginpage.js')}}"></script>
    <script>
        if(localStorage.getItem('error') != null){
            $('.error').append('<span class="red">' + localStorage.getItem('error') + '</span>');
            localStorage.removeItem('error');
        }
    </script>
@endsection