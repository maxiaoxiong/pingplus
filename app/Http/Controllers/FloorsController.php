<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FloorsController extends Controller
{
    public function index()
    {
        return view('floors.index');
    }

    public function create()
    {
        return view('floors.create');
    }

    public function edit($id)
    {
        return view('floors.edit');
    }
}
