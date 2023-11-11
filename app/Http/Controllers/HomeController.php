<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('index');
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home (){
        $products = Products::paginate(12);
        return view('welcome', compact('products'));
    }

    public function home2(Request $request){
        $products = Products::paginate(12);

        if ($request->ajax()) {
            return view('paginate.pagination', compact('products'));
        }

        return view('paginate.products');
    }
}
