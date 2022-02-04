<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class errorController extends Controller
{
    public function error404()
    {
        return view('page-404');
    }
}
