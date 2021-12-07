<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorMainController extends MainController
{
    public function store(Book $book)
    {
        $author = new Author();
        $author->name = \request()->get('name');
//        dd($author);
        $book->authors()->save($author);
//        dd($book, \request()->all( ));

        return redirect()->to("/authors/$author->id");
    }
}
