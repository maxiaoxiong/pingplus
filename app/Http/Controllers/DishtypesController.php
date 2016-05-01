<?php

namespace App\Http\Controllers;

use App\Dish;
use App\Dishtype;
use Illuminate\Http\Request;

use App\Http\Requests;

class DishtypesController extends Controller
{
    public function index()
    {
        $dishtypes = Dishtype::all();
        return view('dishtypes.index',compact('dishtypes'));
    }

    public function create()
    {
        return view('dishtypes.create');
    }

    public function store(Request $request)
    {
        $flag = Dishtype::firstOrCreate(array_merge($request->except('_token')));
        if($flag){
            return redirect()->route('dishtypes.index');
        }
    }
    public function edit($id)
    {
        $dishtype = Dishtype::find($id);
        return view('dishtypes.edit',compact('dishtype'));
    }

    public function update($id, Request $request)
    {
        $dishtype = Dishtype::find($id);
        $dishtype->dish_type_name = $request->get('dish_type_name');
        $flag = $dishtype->save();
        if($flag == 1){
            return redirect()->route('dishtypes.index');
        }
    }

    public function destroy($id)
    {
        $flag = Dishtype::destroy($id);
        if($flag){
            return redirect()->route('dishtypes.index');
        }
    }
}
