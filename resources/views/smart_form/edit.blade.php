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
                <div class="positive_answer">
                    <input id="positive" type="radio" value="positive" name="test" required/>
                    <label for="positive">positive</label>
                </div>
                <div class="negative_answer">
                    <input id="negative" type="radio" value="negative" name="test" required/>
                    <label for="negative">negative</label>
                </div>
            </div>
            <div class="smart_form_send_scope">
                <div class="smart_form_confirm"><button type="submit">Применить</button></div>
                <div class="smart_form_cancel"><button type="reset">Отмена</button></div>
            </div>
        </form>
    </div>
@endsection
