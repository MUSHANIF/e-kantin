<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trxhead;
use App\Models\tbtrxdetail;
use Illuminate\Support\Facades\DB;

class trxdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = tbtrxdetail::all();
        return view(
            'superadmin.trxdetail.transaction',
            compact('data'),
            [
                "title" => "transaction"
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
        $model = new tbtrxdetail;
        return view(
            'superadmin.trxdetail.create',
            compact('model'),
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
        $model = new tbtrxdetail;
        $model->id = $request->id;
        $model->StoreID = $request->StoreID;
        $model->ProdID = $request->ProdID;
        $model->trxNo = $request->trxNo;
        $model->SKU = $request->SKU;
        $model->barcode = $request->barcode;
        $model->prodname = $request->name;
        $model->nameDisp = $request->name;
        $model->namePrint = $request->name;
        $model->Qty = $request->Qty;
        $model->unit = $request->unit;
        $model->cost = $request->cost;
        $model->price = $request->price;
        $model->service = $request->service;
        $model->tax = $request->tax;
        $model->images = $request->images;
        $model->desc = $request->desc;
        $model->active = $request->active;
        $model->save();

        return redirect('transaction');
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
        $condiment = tbtrxdetail::find($id);
        return view('superadmin.trxdetail.edit', compact('transaction'), ["title" => "edit data"]);
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
        $model = trxhead::find($id);
        $model->id = $request->id;
        $model->StoreID = $request->StoreID;
        $model->tgl = $request->tgl;
        $model->trxNo = $request->trxNo;
        $model->tblNo = $request->tblNo;
        $model->jnstrx = $request->jnstrx;
        $model->totaltag = $request->totaltag;
        $model->tax = $request->tax;
        $model->serv = $request->serv;
        $model->disc = $request->disc;
        $model->grandTotal = $request->grandTotal;
        $model->payType = $request->payType;
        $model->pay = $request->pay;
        $model->change = $request->change;
        $model->status = $request->status;
        $model->save();

        return redirect('transaction');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trx = tbtrxdetail::find($id);
        $trx->delete();
        return redirect('transaction');
    }
}
