<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $item_ids = DB::table('items')
        ->select('item_id', DB::raw('COUNT(item_id)'))
        ->groupBy('item_id')
        ->orderBy(DB::raw('COUNT(item_id)'), 'DESC')
        ->take(6)
        ->pluck('item_id');

        $items = Item::findMany($item_ids);

        return view('home')->with('items',$items);
        return view('home');
    }
}
