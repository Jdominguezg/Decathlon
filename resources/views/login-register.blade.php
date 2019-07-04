@extends('layouts.principal')

@section('content')


<div class="container login-register-container" style="background-image: url({{ asset('imgs/bg/login-bg.jpg') }});">


    @if(session()->has('congrats'))
        <div class="overflow"></div>
        <div class="alert">
            <p class="">
                {{ session()->has('logout') ? trans('index.logout-ok') : trans('index.register-ok') }}
            </p>
            <button class="raised-button">Aceptar</button>
        </div>
    @endif   
       


    <div class="login-register-card">
        <div class="rounded-logo" style="background-image: url({{ asset('imgs/logo/logo-small.png') }})"></div>
        
        {{-- Login --}}

        <form action="{{ route('login') }}" method="POST" class="login-form {{(session()->has('register')) ? 'back' : ''}}">

            <h2 class="form-title">{{ trans('form.login') }}</h2>
            <div class="col-12">

               {{-- Email --}}
               <div class="textfield">
                <input type="email" name="{{ trans('form.email') }}" id="{{ trans('form.email') }}-login" value="{{ session()->has('login') ? old(trans('form.email')) : '' }}">
                <label for="{{ trans('form.email') }}-login">{{ trans('form.email') }}</label>
            </div>
            {!! session()->has('login') ? $errors->first(trans('form.email'), '<div class="error-message">:message</div>') : '' !!}


            {{-- Contraseña --}}
            <div class="textfield">
                <input type="password" name="{{ trans('form.password') }}" id="{{ trans('form.password') }}-login" value="">
                <label for="{{ trans('form.password') }}-login">{{ trans('form.password') }}</label>
            </div>
            {!! session()->has('login') ? $errors->first(trans('form.password'), '<div class="error-message">:message</div>') : '' !!}

            <p>{{ trans('form.not_account') }}</p>
            <div class="register-flip-button">{{ trans('form.register') }}</div>
            @csrf
            <button class="raised-button">{{ trans('form.login') }}</button>
        </div>
    </form> 

    {{-- Registro --}}

    <form action="{{ route('register') }}" method="POST" class="register-form {{(session()->has('register')) ? '' : 'back'}}">

        <div class="login-flip-button">
            <i class="material-icons">arrow_back</i>
        </div>
        <h2 class="form-title">{{ trans('form.register') }}</h2>
        <div class="col-12">
            {{-- Nombre --}}
            <div class="textfield">
                <input type="text" name="{{ trans('form.name') }}" id="{{ trans('form.name') }}" value="{{ old(trans('form.name')) }}">
                <label for="{{ trans('form.name') }}">{{ trans('form.name') }}</label>
            </div>
            {!! session()->has('register') ? $errors->first(trans('form.name'), '<div class="error-message">:message</div>') : '' !!}

            {{-- Apellidos --}}
            <div class="textfield">
                <input type="text" name="{{ trans('form.surname') }}" id="{{ trans('form.surname') }}" value="{{ old(trans('form.surname')) }}">
                <label for="{{ trans('form.surname') }}">{{ trans('form.surname') }}</label>
            </div>
            {!! session()->has('register') ? $errors->first(trans('form.surname'), '<div class="error-message">:message</div>') : '' !!}

            {{-- DNI --}}
            <div class="textfield">
                <input type="text" maxlength="9" name="{{ trans('form.dni') }}" id="{{ trans('form.dni') }}" value="{{ old(trans('form.dni')) }}">
                <label for="{{ trans('form.dni') }}">{{ trans('form.dni') }}</label>
                <span class="toast">{{ trans('form.toast.dni') }}</span>
            </div>
            {!! session()->has('register') ? $errors->first(trans('form.dni'), '<div class="error-message">:message</div>') : '' !!}


            {{-- Email --}}
            <div class="textfield">
                <input type="email" name="{{ trans('form.email') }}" id="{{ trans('form.email') }}-register" value="{{session()->has('register') ? old(trans('form.email')) : '' }}">
                <label for="{{ trans('form.email') }}-register">{{ trans('form.email') }}</label>
                <span class="toast">{{ trans('form.toast.email') }}</span>
            </div>
            {!! session()->has('register') ? $errors->first(trans('form.email'), '<div class="error-message">:message</div>') : '' !!}


            {{-- Contraseña --}}
            <div class="textfield">
                <input type="password" name="{{ trans('form.password') }}" id="{{ trans('form.password') }}-register" value="">
                <label for="{{ trans('form.password') }}-register">{{ trans('form.password') }}</label>
                <span class="toast">{!! trans('form.toast.password') !!}</span>
            </div>
            {!! session()->has('register') ? $errors->first(trans('form.password'), '<div class="error-message">:message</div>') : '' !!}

            <input type="hidden" name="register" id="register" val="1" calss="d-none">
            @csrf
            <button class="raised-button"><span>{{ trans('form.register') }}</span></button>
        </div>
    </form>


</div>

</div>

@endsection