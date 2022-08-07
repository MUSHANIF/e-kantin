<?php

namespace App\Http\Controllers;

use App\Models\tbtrxdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Hashids\Hashids;
use Auth;
class reportadminController extends Controller
{
    public function index()
    {
        $datas = DB::table('rpt_allsales')
                ->get();
        return view('admin.report.report', compact('datas'),
        [
            "title" => "Report"
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
        $datas = DB::table('rpt_allsales')
            ->where('rpt_allsales.StoreID', '=', $StoreID )
            ->where('rpt_allsales.DATE', '=', $tgl)
            ->get();
            if($store == $StoreID){
                return view(
                    'admin.report.report',
                    
                    compact('datas'),
                    [
                        "title" => "Report"
                    ]
                );
            }else{
                abort(403);
            }
        }
      
}
