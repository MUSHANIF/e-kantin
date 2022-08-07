<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\trxhead;
use App\Models\tbtrxdetail;
use Illuminate\Support\Facades\DB;
use Hashids\Hashids;
use Auth;

class tbtransaksiadminController extends Controller
{
    public function index()
    {
        $datas = DB::table('trxheads')
        ->join('tbtrxdetails', 'tbtrxdetails.status', '=', 'trxhead.status')
        ->get();

        return view(
            'admin.transaksi.transaksi',
            compact('datas'),
            [
                "title" => "Condiment"
            ]
        );
    }
    public function show(Request $request, $StoreID)
    {
        $tgl = $request->tgl;
        $store = Auth::user()->StoreID;
        /* ini sudah jalan */
        // $datas = tbstore::all();
        $hash = new Hashids('', 20);
        $datas = DB::table('trxheads')
            
            ->where('trxheads.StoreID', '=', $StoreID )
            ->where('trxheads.tgl', '=', $tgl)
            ->join('rpt_allsales', 'trxheads.trxNo', '=', 'rpt_allsales.trxNo')
            ->select('*')
            ->get();
            if($store == $StoreID){
                return view(
                    'admin.transaksi.transaksi',
                    
                    compact('datas'),
                    [
                        "title" => "List Transaksi"
                    ]
                );
            }else{
                abort(403);
            }
        
    }
     public function update(Request $request,  $StoreID, $trxNo)
     {
        $modul = trxhead::find($StoreID,$trxNo);
        
        $modul->status = $request->ubah;
        
        $modul->save();

        return redirect('admin.transaksi.transaksi');
     }

}
