<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');

    }

    public function statics()
    {
        return view('static');
    }

    public function chosen_one()
    {
        return view('chosen-one');
    }
}
