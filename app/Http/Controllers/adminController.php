<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {

        // if(auth()->check() || auth()->user()->Level !== 4){
        //     abort(403);
        // }
        // $this->authorize('admin'); 
        return view(
            'admin.home',
            [
                "title" => "Product"
            ]

        );
    }
}
