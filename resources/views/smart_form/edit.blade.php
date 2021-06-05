@extends('layouts.master')

@section('title', 'Smart форма')

@prepend('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/smart_form_edit.css') }}"/>
@endprepend

@section('content')
    <div class="smart_form_questions_scope">
        <form method="POST" action="{{ route('smart-form-edit') }}">
            @csrf
            @foreach ($questions as $question)
            <div class="item_question">
                <div class="content"><p>{{ $question->content }}</p></div>
                <div class="positive_answer">
                    <input id="{{ $question->id }}" type="radio" value="true" name="{{ $question->category->name }}" required/>
                    <label for="{{ $question->id }}"><p>{{ $question->positive }}</p></label>
                </div>
                <div class="negative_answer">
                    <input id="{{ $question->id * 10 }}" type="radio" value="false" name="{{ $question->category->name }}" required/>
                    <label for="{{ $question->id * 10 }}"><p>{{ $question->negative }}</p></label>
                </div>
            </div>
            @endforeach
            <div class="smart_form_send_scope">
                <div class="smart_form_confirm"><button type="submit">Применить</button></div>
                <div class="smart_form_cancel"><button type="reset">Отмена</button></div>
            </div>
        </form>
    </div>
@endsection
