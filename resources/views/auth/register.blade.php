@extends('layouts.master')

@section('title', 'Регистрация')

@prepend('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}"/>
@endprepend

@section('content')
    <div class="register_scope">
        <div class="title_logo"><img src="{{ asset('img/auth/register_logo.svg') }}" alt="Register logo"/></div>
        <div class="title_name"><h2>Регистрация</h2></div>
        <div class="form_scope_register">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="name"><input type="text" placeholder="Имя" name="name" required /></div>
                <div class="email"><input type="email" placeholder="Эл.почта" name="email" required /></div>
                <div class="password"><input type="password" placeholder="Пароль" name="password" required /></div>
                <div class="password_confirmation"><input type="password" placeholder="Подтвердить пароль" name="password_confirmation" required /></div>
                <div class="register_confirm"><button type="submit">Создать аккаунт</button></div>
            </form>
        </div>
    </div>
@endsection
