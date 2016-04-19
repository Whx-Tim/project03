<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CooperativeController extends Controller
{
    public function show(){
        $users = User::where('type','合作社')->get();
        return view('rightmenu',compact('users'));
    }
}
