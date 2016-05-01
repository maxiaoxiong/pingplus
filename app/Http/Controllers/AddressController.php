<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AddressController extends Controller
{
    public function index()
    {
        return view('address.index');
    }

    public function create()
    {
        return view('address.create');
    }

    public function edit($id)
    {
        return view('address.edit');
    }
}
