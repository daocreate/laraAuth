<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackController extends Controller
{
    public function index()
    {
        return view('BackEnd.test');
    }
    public function backendtest()
    {
        return view('BackEnd.test');
    }
}
