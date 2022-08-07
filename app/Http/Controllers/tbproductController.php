<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbproduct;
use Illuminate\Support\Facades\DB;

class tbproductController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $datas = DB::table('tbproducts')
        
        ->where('name','like',"%".$cari."%")
        ->get();
        return view(
            'superadmin.tbproduct.product',
            compact('datas'),
            [
                "title" => "Product"
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
        $model = new tbproduct;
        return view(
            'superadmin.tbproduct.create',
            compact('model'),
            [
                "title" => "tambah"
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
        $model = new tbproduct;

        // $filename = $request->images->getClientOriginalName();
        // $request->images->storeAs('public/foto', $filename);

        $model->StoreID = $request->StoreID;
        $model->ProdID = $request->ProdID;
        $model->name = $request->name;
        $model->cost = $request->cost;
        $model->images = $request->images;
        $model->price = $request->price;
        if ($image = $request->file('images')) {
            $destinationPath = 'assets/images/product';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $model['images'] = "$profileImage";
        }
        $model->save();

        return redirect('superadmin/product');
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
    public function edit($ProdID)
    {
        $product = tbproduct::find($ProdID);

        return view('superadmin.tbproduct.edit', compact('product'), ["title" => "edit data"]);
    }


    public function update(Request $request, $ProdID)
    {
        $model = tbproduct::find($ProdID);
        $model->StoreID = $request->StoreID;
        $model->ProdID = $request->ProdID;
        $model->name = $request->name;
        $model->cost = $request->cost;
        $model->price = $request->price;
        if ($image = $request->file('images')) {
            $destinationPath = 'assets/images/product';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $model['images'] = "$profileImage";
        }
        $model->save();

        return redirect('superadmin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ProdID)
    {
        $product = tbproduct::find($ProdID);

        $file = public_path('/assets/images/product') . $product->images;
        if (file_exists($file)) {
            @unlink($file);
        }

        $product->delete();
        return redirect('superadmin/product');
    }

    public function search(Request $request)
    {
        $datas = $_GET('cari');
        $product = tbproduct::where('name', 'like', '%' . $datas . '%')->get();
        return view('superadmin.tbproduct.product', compact('datas'));
    }
}
