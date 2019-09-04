<?php
/**
 * Create by DAO<daocreate@gmail.com> on 03/09/19 10:48
 * phone : 676656747 / 697817780
 * Copyright (c) 2019 . All rights reserved.
 * Last modified 03/09/19 10:48
 */
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class FrontController extends Controller
{
    public function index()
    {
        return view('FrontEnd.index');
    }

}