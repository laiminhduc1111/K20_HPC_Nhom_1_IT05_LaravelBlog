<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        return view ('blog');
    }
    public function  readmore()
    {
        return view ('readmore');
    }
}
