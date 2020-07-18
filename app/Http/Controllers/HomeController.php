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
        $item_ids = DB::table('item_order')
        ->select('item_id_fk', DB::raw('COUNT(item_id_fk)'))
        ->groupBy('item_id_fk')
        ->orderBy(DB::raw('COUNT(item_id_fk)'), 'DESC')
        ->take(4)
        ->pluck('item_id_fk');

        $items = Item::findMany($item_ids);

        return view('home')->with('items',$items);;
        return view('home');
    }
}
