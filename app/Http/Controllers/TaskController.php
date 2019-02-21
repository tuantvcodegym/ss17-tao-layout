<?php

namespace App\Http\Controllers;

use App\Lists;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    function index(){
        $list = \App\Lists::all();
        return view('list', compact('list'));
    }
    function add(){
        return view('insert');
    }

    function insert(Request $request){
        $insert = new Lists();
        $insert->category = $request->input;
        $insert->save();
        return redirect()->route('list');
    }
}
