<?php

@extends('layouts.app')

@section('content')
<h1>Rate a Book</h1>
<form method="POST" action="{{ url('rate') }}">
    @csrf
    <select name="book_id">
        @foreach ($books as $book)
            <option value="{{ $book->id }}">{{ $book->name }}</option>
        @endforeach
    </select>
    <select name="rating">
        @for ($i = 1; $i <= 10; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
        @endfor
    </select>
    <button type="submit">Submit Rating</button>
</form>
@endsection
