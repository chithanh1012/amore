<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\FrontendController;
use Illuminate\Http\Request;
use App\Http\Requests;

class HomeController extends FrontendController
{

    public function index()
    {
        return view('frontends.home.index', $this->data);
    }
}
