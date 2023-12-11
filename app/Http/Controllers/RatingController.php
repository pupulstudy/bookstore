<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\Book;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function create()
    {
        $books = Book::all();
        return view('rating', compact('books'));
    }

    public function store(Request $request)
    {
        // Assuming 'book_id' and 'rating' are passed from the form
        Rating::create([
            'book_id' => $request->book_id,
            'rating' => $request->rating,
        ]);

        return redirect('/books');
    }
}
