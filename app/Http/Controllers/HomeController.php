<?php

namespace App\Http\Controllers;

use App\Models\tbstore;
use App\Models\trxhead;
use Hashids\Hashids;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datas = tbstore::all();
        $hash = new Hashids('', 20);
        return view(
            'home',
            compact('datas', 'hash'),
            [
                "title" => "e-Canteen"
            ]
        );
    }

    public function show($StoreID)
    {
        $menu = tbstore::find($StoreID);

        // $menu->StoreID;
        // setKantin($menu->StoreID);
        return view('home', compact('menu'), ["title" => "Menu"]);
    }
}
