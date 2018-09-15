<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$world_currencies = DB::table('world_currencies')->get();
      //$currencies = Currency::orderBy('id','DESC')->paginate(20);
      //return view('pages.index', compact('currencies','world_currencies'));
      return view('pages.dashboard');

    }

    public function create()
    {
       $world_currencies = DB::table('world_currencies')->get();
       return view('pages.index', compact('world_currencies'));
    }
}
