<?php

@extends('layouts.app')

@section('content')
<h1>Top Authors</h1>
<ul>
    @foreach ($authors as $author)
        <li>{{ $author->name }}</li>
    @endforeach
</ul>
@endsection
