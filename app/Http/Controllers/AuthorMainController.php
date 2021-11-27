<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorMainController extends MainController
{
    public function store()
    {
        dd("Test", \request()->all( ));
    }
}
