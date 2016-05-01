<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DormitoriesController extends Controller
{
    public function index()
    {
        return view('dormitories.index');
    }

    public function create()
    {
        return view('dormitories.create');
    }

    public function edit()
    {
        return view('dormitories.edit');
    }
}
