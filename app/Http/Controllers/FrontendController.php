<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrontendController extends Controller
{
    public $data = [
        'icon'  => 'Icon',
        'title' => 'Title',
        'siteName' => 'Site name',
        'metaTitle' => 'Meta title',
        'metaDescription' => 'Meta description',
        'metaImage' => 'Meta image',
    ];
}
