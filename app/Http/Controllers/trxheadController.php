<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trxhead;
use Illuminate\Support\Facades\DB;

class trxheadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = trxhead::all();
        return view(
            'superadmin.trxhead.transaction',
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
        $model = new trxhead;
        return view(
            'superadmin.trxhead.create',
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
        $model = new trxhead;
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
        $condiment = trxhead::find($id);
        return view('superadmin.trxhead.edit', compact('transaction'), ["title" => "edit data"]);
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
        $trx = trxhead::find($id);
        $trx->delete();
        return redirect('transaction');
    }

    // function updateTrx($param1, $param2)
    // {
    //     $dump = $param2 . '-' . $param1;
    //     // $sql =  "UPDATE trxheads
    //     //          SET StoreID = $param2, trxNo = $dump
    //     //          WHERE id = $param1 ";

    //     $sql = trxhead::find($param1)
    //         ->where('id', '=', $param1)
    //         ->update(['StoreID' => '$param2'], ['trxNo' => '$dump'])
    //         ->get();
    // }
}
