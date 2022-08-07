<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbproduct;
use App\Models\tbstore;
use App\Models\trxhead;
use App\Models\tbtrxdetail;
use condimentcontroller;
use Illuminate\Support\Facades\DB;
use Hashids\Hashids;
use Alert;
class menuController extends Controller
{
    public function index()
    {
        // dd(request('cari'));
        // $search = tbproduct::latest();
        // if (Request('cari')) {
        //     $search->where('name', 'like', '%' . request('cari') . '%');
        // }
        // $cari = $request->cari;

        // $pegawai = DB::table('tbproducts')
        // ->where('name','like',"%".$cari."%")
        // ->paginate();
        
        $datas = tbproduct::all();
        $hash = new Hashids('', 20);
        return view(
            'menu',
            compact('datas','hash'),
            [
                "title" => "Menu"
            ]
        );
    }


    public function show(Request $request, $StoreID)
    {
        $hash = new Hashids('', 20);
        $cari = $request->cari;

       
        if (empty(getNoTrx())) {
			 $hash = new Hashids('', 20);
            //AMBIL NOMERDI TABEL STORE
            $store = tbstore::find($hash->decodeHex($StoreID));
            $store->TrxNo =  $store->TrxNo + 1;
            $store->save();

            // ISI SESION KANTIN DAN NOMERTRX
            setNoTrx($store->TrxNo);
            setKantinName($store->StoreName);

            // SIMPAN NOMER DI TABEL TRXHEAD
            $modul = new trxhead;
            $modul->StoreID = $hash->decodeHex($StoreID); //$request->StoreID;
            $modul->trxNo = $store->TrxNo; //$request->trxNo;
            $modul->tgl = date("Y-m-d");
            $modul->jnstrx = getSegment();
            //$modul->jnstrx = $request->jnsTrx;

            $modul->save();
            $modul->StoreID;
            setKantin($modul->StoreID);
        };


        // $datas = tbproduct::find($StoreID);
        // return view('menu', compact('datas'), ["title" => "Menu"]);
        // $store = $request->store;
        // $cari = $request->cari;

        /* SELEKSI DATA / QUERY SESUAI STORE YANG DIPILIH */
        $hash = new Hashids('', 20);
       
        // $pegawai = DB::table('tbproducts')
        // ->where('name','like',"%".$cari."%")
        // ->paginate();

        $datas = DB::table('tbproducts')
            ->where('StoreID', '=', $hash->decodeHex($StoreID))
            ->where('name','like',"%".$cari."%")
            ->get();
        setKantin($StoreID);
        if ($datas != $cari && getKantin() != $StoreID) {
            Alert::info('Stok hasbis', 'barang tidak ada!');
        }
        // $datas = DB::table('tbproduct')
        //     ->where('StoreID', "1");
        // $datas = DB::table('tbstores')
        //     ->leftJoin('tbproducts', 'tbstores.id', '=', 'tbproducts.StoreID')
        //     ->get();


        //////////////////////////////////////////////////
        //hitung jumlah yg sudah di pesanan
        // belum berhasil
        //////////////////////////////////////////////////

        $trxno = getNoTrx();
        if (empty($trxno)) {
            /*		
        $qtyOrder = DB::table('tbtrxdetails')
            ->Select('prodname','Qty')
			->where('trxNo', '=', $trxno )
            ->get();
			setSumOfOrder($qtyOrder->Qty);
		*/
        } else {
            //setSumOfOrder('0000');
        }


        return view('menu', compact('datas','hash','cari'), ["title" => "Menu"]);
        print_r('datas');
    }

    
    public function destroy(Request $request){
        // example:
        Alert::success('SuccessAlert','Lorem ipsum dolor sit amet.')->showConfirmButton('Confirm', '#3085d6');

        $jml =(int)getSumOfOrder(); 
        if ($jml > 0 )	{
            $t = getProductQty();
            $prod = tbproduct::find(getProductID());
            $prod->unit = $prod->unit + $t;  
            $prod->save();
        }
        return redirect('/');
    }

    // public function search(Request $request)
    // {
    //     // $datas = tbproduct::find($StoreID);
    //     // return view('menu', compact('datas'), ["title" => "Menu"]);

    //     $cari = $request->cari;
    //     // $datas2 = tbproduct::all();
    //     $datas2 = DB::table('tbproducts')
    //         ->where('name', 'like', "%" . $cari . "%")
    //         ->get();

    //     // $datas = $_GET('cari');
    //     // $product = tbproduct::where('name', 'like', '%' . $datas . '%')->get();
    //     // return view('menu', compact('datas'));
    //     // return view('menu', ['menu' => $datas2]);


    //     return view('menu', compact('datas2'), ["title" => "Menu"]);
    // }

    // public function search(Request $request)
    // {

    //     $keyword = $request->cari;
    //     $users = tbproduct::where('name', 'like', "%" . $keyword . "%");
    //     return view('menu', compact('users'));
    // }

    // public function update(Request $request)
    // {

    //     // $modul = trxhead::find($id);
    //     // $modul->StoreID = $request->StoreID;
    //     $modul = new trxhead;
    //     $modul->StoreID = $request->StoreID;
    //     $modul->trxNo = $request->trxNo;
    //     $modul->save();
    //     $modul->StoreID;
    //     setKantin($modul->StoreID);


    //     //     return redirect('/menu');
    // }



}
