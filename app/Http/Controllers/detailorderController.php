<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbproduct;
use App\Models\tbtrxdetail;
use App\Models\tbstore;
use App\Models\tbcondiment;
use Illuminate\Support\Facades\DB;
use kantin\kantin;
use Hashids\Hashids;

class detailorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$hash = new Hashids('', 20);
        $StoreID = $hash->decodeHex(getKantin());
        //$StoreID = getKantin();
		$trxNo = getNoTrx();
		if(getSumOfOrder() != '0'){

        $order = DB::table('rpt_allsales')
            ->where('StoreID', $StoreID)
            ->where('trxNo', $trxNo)
            ->get();

        //$datas = tbproduct::all();
        return view(
            'detail-order',
            compact('order'),
            [
                "title" => "detail order"
            ]
        );
		}else{
			 return redirect('/menu/' . getKantin());
		}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ProdID)
    {
        $order = DB::table('tbproduct')
            ->leftJoin('tbcondiment', 'tbproduct.ProdID', '=', 'tbpcondiment.id')
            ->get();
			
        return view('detail-order', compact('order'), ["title" => "Detail order"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    public function destroy($ProdID)
    {
        $order = tbtrxdetail::where('ProdID',$ProdID)->first();

        if ($order != null) {
            $order->delete();
            // return redirect()->route('detail-order')->with(['message'=> 'Successfully deleted!!']);
        }

        // $order = DB::table('rpt_allsales')
        //     ->where('ProdID',$ProdID)
        //     ->first();
       
            // $datas = tbtrxdetail::find($id); 
            // $datas = tbtrxdetail::where('trxNo', $datas->id)
            //             ->first();

            // tbtrxdetail::destroy($datas->id);
          
           return redirect('/detail-order');
    }
     */
	
	
	public function destroy(Request $request)
	{
        // PROSES DELETE
        $StoreID = getKantin();
        $trxNo = getNoTrx();
		
		$hash = new Hashids('', 20);
		$jml =(int)getSumOfOrder(); 
		setSumOfOrder( (int)$jml - (int) $request->Qty );

		if ($jml > 0 )	
		{
		    DB::table('tbtrxdetails')
            ->where('trxNo', $trxNo)
			->Where('ProdID', $request->ProdID)
            ->delete();
            $t = getProductQty();
            $prod = tbproduct::find(getProductID());
            $prod->unit = $prod->unit + $t;  
            $prod->save();
		
		return redirect('detail-order');
		} else
		{	
		return redirect('menu/'.getKantin()  );
		}
		
			
    }
	
	
}
