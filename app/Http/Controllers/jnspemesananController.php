<?php

namespace App\Http\Controllers;

use App\Models\trxhead;
use App\Models\tbproduct;
use Illuminate\Http\Request;
use Carbon\Carbon;

class jnspemesananController extends Controller
{
    // ketika ada yang login jangan arahkan dia ke dalam jnspemesanan!
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        $tanggal = date("Y-m-d");

        return view(
            'jnspemesanan',
            compact('tanggal'),
            [
                "title" => "Menu"
            ]
        );
    }
    public function store(Request $request)
    {

        // $modul = new trxhead;
        // // $modul->trxNo = $request->trxNo;
        // $modul->tgl = $request->tgl;
        // $modul->trxNo = $request->trxNo;
        // $modul->StoreID = $request->StoreID;
        // $modul->jnstrx = $request->jnstrx;
        // $modul->save();
        // $modul->id;
        // setNoTrx($modul->id);
        // setNoTrx($request->);
        setSegment($request->jnstrx);
        setNoTrx($request->id);


        return redirect('/home');
    }

    // public function show(Request $request, $id)
    // {
    //     $value = $request->session()->get('trxNo');
    //     return view('jnspemesanan', compact('value'));
    // }

    public function destroy(Request $request){
        $jml =(int)getSumOfOrder(); 
        if ($jml > 0 )	{
            $t = getProductQty();
            $prod = tbproduct::find(getProductID());
            $prod->unit = $prod->unit + $t;  
            $prod->save();
        }
        return redirect('detail-order');
    }
    
}
