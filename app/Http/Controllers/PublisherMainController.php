<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherMainController extends MainController
{
    function publishers_list()
    {
//        $publishers = Publisher::all();
        $publishers = Publisher::all();
        return view('publisher_list', ['publishers', $publishers]);
    }
}
