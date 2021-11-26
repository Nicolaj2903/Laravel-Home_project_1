<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookMainController extends MainController
{
    public function index()
    {
//        dd(Book::all());
        $books = Book::all();
        return view('user_book_list', ['books' => $books]); // 'books': Variabel navn  '$books': data
    }


    // When a user clicks on a given book in the view 'user_book_list', it will show that book's information by using this method
    public function show(Book $book)   // Used to only have $id as an argument
    {
//       $book = Book::findOrFail($id);   // findOrFail: If the object doesn't exist, give a 404 error (NOT FOUND)
       return view('show_books', ['book'=> $book]);
    }
}
