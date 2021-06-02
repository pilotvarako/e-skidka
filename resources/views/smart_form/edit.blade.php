@extends('layouts.master')

@section('title', 'Smart форма')

@prepend('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/smart_form_edit.css') }}"/>
@endprepend

@section('content')
    <div class="smart_form_questions_scope">
        <form method="POST" action="{{ route('smart-form-edit') }}">
            <div class="item_question">
                @csrf
                <div class="content"><p>test</p></div>
                <div class="positive_answer"><input type="radio" value="positive" name="test"/>positive</div>
                <div class="negative_answer"><input type="radio" value="negative" name="test"/>negative</div>
            </div>
            <div class="smart_form_confirm"><button type="submit">Применить</button></div>
            <div class="smart_form_cancel"><button type="reset">Отмена</button></div>
        </form>
    </div>
@endsection
