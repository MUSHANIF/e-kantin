<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbcondiment;
use App\Models\tbproduct;
use App\Models\trxhead;
use App\Models\tbtrxdetail;
use App\Models\tbstore;
use Illuminate\Support\Facades\DB;
use Hashids\Hashids;
use Alert;
class condimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tanggal = date("Y-m-d");

        $datas = tbcondiment::all();
        $datas2 = tbproduct::all();
        return view(
            'condiment',
            compact('datas', 'datas2'),
            [
                "title" => "condiment"
            ]
        );
    }

    // public function custom()
    // {

    //     $datas2 = tbproduct::all();
    //     return view(
    //         'condiment',
    //         compact('datas2'),

    //         [
    //             "title" => "condiment"
    //         ]
    //     );
    // }

    public function show(Request $request, $condiment)
    {

        //andre
        setProductID($condiment);


        // $datas = tbproduct::find($StoreID);
        // return view('menu', compact('datas'), ["title" => "Menu"]);

        $condiment = $request->condiment;

        /* ini sudah jalan */
        $datas = tbcondiment::all();
        $datas = DB::table('tbcondiments')
            ->where('ProdID', '=', $condiment)
            ->get();

        $datas2 = tbproduct::all();
        $datas2 = DB::table('tbproducts')
            ->where('ProdID', '=', $condiment)
            ->get();
        $prod = tbproduct::find(getProductID());
        if($prod->unit < '5'){
            Alert::info('Stok Kurang Dari 5!', 'AYO BELI KE BURU HABIS!');
        }
        // $datas = DB::table('tbproduct')
        //     ->where('StoreID', "1");
        // $datas = DB::table('tbstores')
        //     ->leftJoin('tbproducts', 'tbstores.id', '=', 'tbproducts.StoreID')
        //     ->get();

        return view('condiment', compact('datas', 'datas2'), ["title" => "Condiment"]);
        
    }

    public function update(Request $request)
    {   // harusnya NewTrx Nich

        ///////////////////////////////////////
        // masukin data ke trxHeader untuk Transaksi Pertama
        // sudah d pindah ke menu controler 
        // karena if Emptynya nggak berjalan dgn benar.
        ///////////////////////////////////////
        /*
		if (!empty($request->trxNo)){} else
		{	
		$hash = new Hashids('', 20);
        $modul = new trxhead;
        $modul->StoreID = $hash->decodeHex($request->StoreID);
        $modul->trxNo = $request->trxNo;
        $modul->tgl = $request->tgl;
        // $modul->jnstrx = getSegment();
        $modul->jnstrx = $request->jnsTrx;

        $modul->save();
        $modul->StoreID;
        setKantin($modul->StoreID);
		setNoTrx($modul->trxNo);
		//return redirect('/menu/' . $modul->StoreID);
		}
		*/



        ///////////////////////////////////////
        // ambil detail product dari tbproduct berdasarkan productid 
        ///////////////////////////////////////
        setProductQty($request->ProductQty);
        setPesan($request->namePrint);
        $t = getProductQty();
        $prod = tbproduct::find(getProductID());
        if(setProductQty($request->ProductQty)){
            $prod->unit = $prod->unit - $t;
        }
        $prod->save();


        ///////////////////////////////////////
        // masukkan Product ke trxDetail 
        ///////////////////////////////////////
		$hash = new Hashids('', 20);
        $order = new tbtrxdetail;
        //$order->id = $request->id;
        $order->StoreID = $hash->decodeHex(getKantin());  //$modul->StoreID;
        $order->ProdID = $prod->ProdID;
        $order->trxNo = getNoTrx(); // $modul->trxNo;
        $order->SKU = $prod->SKU;
        $order->barcode = $prod->barcode;
        $order->prodname = $prod->name;
        $order->nameDisp = $prod->nameDisp;
        $order->namePrint = getPesan();
        $order->Qty = getProductQty(); //$request->Qty;
        // $order->namePrint = $prod->ProductQty;
        $order->unit = $prod->unit;
        $order->cost = $prod->cost;
        $order->price = $prod->price;
        $order->service = $prod->price * $prod->service / 100;
        $order->tax = $prod->price * $prod->tax / 100;
        //$order->images = $request->images;
        $order->desc = $request->desc;
        $order->active = $prod->active;
        $order->save();

        ///////////////////////////////////////
        // masukkan Condiment trxDetail 
        // sementara di tiadakan
        ///////////////////////////////////////




        ////////////////////////////////////////////////////
        // Menghitung Jumlah ORder sesuai No Transaksi
        // parameternya adalaho noTransaksi
        ///////////////////////////////////////////////////
        //$trxno = getNoTrx();
        //$myOrder = DB::table('tbtrxdetails')
        //->Select('trxNo', 'prodname')
        //->count('prodname')
        //->where('trxNo', ' = ', '124')
        //	->where('trxNo', '=', getNoTrx() )
        //	->groupBy('trxNo','prodname')
        //->get();
        //setSumOfOrder($myOrder->jumlah);

        ///////////////////////////////////////////////////
        $trxno = getNoTrx();
		$hash = new Hashids('', 20);
        $myOrder = DB::table('sumtotorder')
            ->select('Jml as Qty', 'SubTotal')
            ->where('StoreID', $hash->decodeHex(getKantin()))
            ->where('trxNo', $trxno)
            ->get();

        $key = substr($myOrder, 2, strlen($myOrder) - 4);
        $key = str_replace('"', ' ', $key);
        $key = str_replace('.0000', '', $key);
        $key = str_replace('Qty :', '', $key);
        $key = str_replace('.00', '', $key);
        $key = str_replace(',', 'Items', $key);
        // $key = $myOrder;
        setSumOfOrder($key);


        //return redirect('/menu/' . $modul->StoreID);
        return redirect('/menu/' . $request->StoreID);
    }
}
