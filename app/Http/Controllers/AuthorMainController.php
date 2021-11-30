<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorMainController extends MainController
{
    public function store(Author $author)
    {
        dd($author, \request()->all( ));
    }
}
