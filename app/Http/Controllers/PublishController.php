<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PublishController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function publishinformation(){
        return view('products_publish');
    }
}
