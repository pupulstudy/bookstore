<?php

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Books List</h1>
    <div>
        <form action="{{ url('books/search') }}" method="GET">
            <label for="list_count">List shown:</label>
            <select name="list_count" id="list_count">
                @foreach ([10, 20, 50, 100] as $count)
                    <option value="{{ $count }}">{{ $count }}</option>
                @endforeach
            </select>
            <label for="search">Search:</label>
            <input type="text" name="search" id="search">
            <button type="submit">SUBMIT</button>
        </form>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Book Name</th>
                <th>Category Name</th>
                <th>Author Name</th>
                <th>Average Rating</th>
                <th>Voter</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $index => $book)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->category->name }}</td>
                    <td>{{ $book->author->name }}</td>
                    <td>{{ $book->averageRating() }}</td>
                    <td>{{ $book->votersCount() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
