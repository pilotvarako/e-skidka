@extends('layouts.master')

@section('title', 'Авторизация')

@prepend('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}"/>
@endprepend

@section('content')
    <div class="login_scope">
        <div class="title_logo"><img src="{{ asset('img/auth/login_logo.svg') }}" alt="Login logo"/></div>
        <div class="title_name"><h2>Войти в аккаунт</h2></div>
        <div class="form_scope_login">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="email"><input type="email" placeholder="Эл.почта" name="email" required /></div>
                <div class="password"><input type="password" placeholder="Пароль" name="password" required /></div>
                <div class="login_confirm"><button type="submit">Войти</button></div>
            </form>
        </div>
    </div>
@endsection
