<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
    	return view('home.index');
    }

    public function form()
    {
    	return view('home.form');
    }
}
