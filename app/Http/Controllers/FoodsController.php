<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FoodsController extends Controller
{
    public function index()
    {
        return view('foods.index');
    }
}
