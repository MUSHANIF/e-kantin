<?php

namespace App\Http\Controllers;

use App\Models\tbprice;
use Illuminate\Http\Request;

class tbpriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = tbprice::all();
        return view(
            'superadmin.tbprice.price',
            compact('datas'),
            [
                "title" => "Price"
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $price = new tbprice();
        return view(
            'superadmin.tbprice.create',
            compact('price'),
            [
                "title" => "Create"
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $price = new tbprice();
        $price->StoreID = $request->StoreID;
        $price->LocID = $request->LocID;
        $price->PriceID = $request->PriceID;
        $price->ProdID = $request->ProdID;
        $price->price = $request->price;
        $price->active = $request->active;
        $price->save();

        return redirect('superadmin/price');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $price = tbprice::find($id);
        return view('superadmin.tbprice.edit', compact('price'), ["title" => "Edit Harga"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $price = tbprice::find($id);
        $price->StoreID = $request->StoreID;
        $price->LocID = $request->LocID;
        $price->PriceID = $request->PriceID;
        $price->ProdID = $request->ProdID;
        $price->price = $request->price;
        $price->active = $request->active;
        $price->save();

        return redirect('superadmin/price');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $price = tbprice::find($id);
        $price->delete();
        return redirect('superadmin/price');
    }
}
