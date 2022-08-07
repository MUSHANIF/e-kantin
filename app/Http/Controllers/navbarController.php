<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbstore;
use Hashids\Hashids;
class navbarController extends Controller
{
    public function index()
    {
        $datas = tbstore::all();
        $hash = new Hashids();
        return view(
            'partials.navbar',
            compact('datas','hash'),
            [
                "title" => "Home"
            ]
        );
    }

    public function show($StoreID)
    {
        $menu = tbstore::find($StoreID);
        return view('home', compact('menu'), ["title" => "Menu"]);
    }
}
