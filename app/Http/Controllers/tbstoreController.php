<?php

namespace App\Http\Controllers;

use App\Models\tbstore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class tbstoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $datas = DB::table('tbstores')
        
        ->where('StoreName','like',"%".$cari."%")
        
        ->get();
        return view(
            'superadmin.tbstore.store',

            compact('datas'),
            [
                "title" => "Store"
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
        $store = new tbstore();
        return view(
            'superadmin.tbstore.create',
            compact('store'),
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
        $store = new tbstore();
        $store->StoreID = $request->StoreID;
        $store->StoreName = $request->StoreName;
        $store->Location = $request->Location;
        $store->Image = $request->Image;
        $store->QrCode = $request->QrCode;
        $store->Url = $request->Url;
        $store->active = $request->active;
        if ($image = $request->file('Image')) {
            $destinationPath = 'assets/images/store';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $store['Image'] = "$profileImage";
        }
        $store->save();

        return redirect('superadmin/store');
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
        $store = tbstore::find($id);
        return view('superadmin.tbstore.edit', compact('store'), ["title" => "Edit Store"]);
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
        $store = tbstore::find($id);
        $store->StoreID = $request->StoreID;
        $store->StoreName = $request->StoreName;
        $store->Location = $request->Location;
        $store->Image = $request->Image;
        $store->QrCode = $request->QrCode;
        $store->Url = $request->Url;
        $store->TrxNo = "99";
        $store->active = $request->active;
        if ($image = $request->file('Image')) {
            $destinationPath = 'assets/images/store';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $store['Image'] = "$profileImage";
        }
        $store->save();

        return redirect('superadmin/store');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = tbstore::find($id);
        $file = public_path('/assets/images/store/') . $store->Image;
        if (file_exists($file)) {
            @unlink($file);
        }
        $store->delete();
        return redirect('superadmin/store');
    }
}
