<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Information;
use App\Price;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Use_;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $excellentUsers = User::where('type','合作社')->where('level','1')->get();
        $users = User::where('type','合作社')->get();
        $news = Information::orderby('created_at','desc')->take(5)->get();
        $products = Product::orderby('created_at','desc')->take(10)->get();
        return view('welcome',compact('news','products'));
    }

    public function showHome(){
        return view('home');
    }

    public function detailInformation($id){
        $informations = Information::find($id);
        return view('detailInformation',compact('informations'));
    }

    public function showPricing(){
        $prices = Price::select(DB::raw('updated_at,MAX(price) as max_price,AVG(price) as avg_price,name,price,type,unit'))->groupBy('id')->get();
        return view('price',compact('prices'));
    }

    public function showCooperatives(){
        $users = User::all();
        return view('cooperative',compact('users'));
    }

    public function test(){
        $prices = Price::all();
//        $price = $prices->toJson();

        return view('txt',['result' => 'ture' , 'price' => $prices]);
    }
}
