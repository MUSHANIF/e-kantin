<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbcondiment;
use Illuminate\Support\Facades\DB;
use Hashids\Hashids;
use Auth;
class tbcondimentadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = tbcondiment::all();
        return view(
            'admin.tbcondiment.condiment',
            compact('datas'),
            [
                "title" => "Condiment"
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
        $model = new tbcondiment;
        return view(
            'admin.tbcondiment.create',
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
        $model = new tbcondiment;
        $model->StoreID = $request->StoreID;
        $model->ProdID = $request->ProdID;
        $model->CondID = $request->CondID;
        $model->name = $request->name;
        $model->price = $request->price;
        $model->images = $request->images;
        // $model->save();

        // return redirect('condiment');
        // $input = new tbcondiment;

        if ($image = $request->file('images')) {
            $destinationPath = 'assets/images/condiment';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $model['images'] = "$profileImage";
        }

        // if ($model->images = $request->file('images')) {
        //     $file = $request->file('images');
        //     $filename = date('YmdHi') . $file->getClientOriginalName();
        //     $file->move(public_path('public/assets/images/'), $filename);
        //     $model['images'] = $filename;
        // }

        $model->save();
        return redirect('admin/condiment');
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
        /* ini sudah jalan */
        // $datas = tbstore::all();
        $hash = new Hashids('', 20);
        $datas = DB::table('tbcondiments')
            ->where('StoreID', '=', $StoreID)
            ->get();
            if($store == $StoreID){
                return view(
                    'admin.tbcondiment.condiment',
                    
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
    public function edit($id)
    {
        $condiment = tbcondiment::find($id);
        return view('admin.tbcondiment.edit', compact('condiment'), ["title" => "edit data"]);
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
        $model = tbcondiment::find($id);
        $model->StoreID = $request->StoreID;
        $model->ProdID = $request->ProdID;
        $model->CondID = $request->CondID;
        $model->name = $request->name;
        $model->price = $request->price;
        if ($image = $request->file('images')) {
            $destinationPath = 'assets/images/condiment';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $model['images'] = "$profileImage";
        }
        $model->save();

        return redirect('admin/condiment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $condiment = tbcondiment::find($id);

        $file = public_path('/assets/images/condiment/') . $condiment->images;
        if (file_exists($file)) {
            @unlink($file);
        }
        $condiment->delete();
        return redirect('admin/condiment');
    }
}
