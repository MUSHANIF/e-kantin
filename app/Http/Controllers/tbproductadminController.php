<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbproduct;
use Illuminate\Support\Facades\DB;
use Hashids\Hashids;
use Auth;
class tbproductadminController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = tbproduct::all();
        return view(
            'admin.tbproduct.product',
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
            'admin.tbproduct.create',
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

        return redirect('admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $StoreID)
    {
        $store = Auth::user()->StoreID;
        $cari = $request->cari;
        /* ini sudah jalan */
        // $datas = tbstore::all();
        $hash = new Hashids('', 20);
        $datas = DB::table('tbproducts')
            ->where('StoreID', '=', $StoreID)
            ->where('name','like',"%".$cari."%")
            ->get();
            if($store == $StoreID){
                return view(
                    'admin.tbproduct.product',
                    
                    compact('datas'),
                    [
                        "title" => "Store"
                    ]
                );
            }else{
                abort(403);
            }
        
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

        return view('admin.tbproduct.edit', compact('product'), ["title" => "edit data"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

        return redirect('admin/product');
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
        return redirect('admin/product');
    }

    public function search(Request $request)
    {
        $datas = $_GET('cari');
        $product = tbproduct::where('name', 'like', '%' . $datas . '%')->get();
        return view('admin.tbproduct.product', compact('datas'));
    }
}
