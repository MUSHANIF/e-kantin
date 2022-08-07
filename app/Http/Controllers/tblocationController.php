<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblocation;

class tblocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = tblocation::all();
        return view(
            'superadmin.tblocation.location',
            compact('datas'),
            [
                "title" => "Location"
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
        $model = new tblocation;
        return view(
            'superadmin.tblocation.create',
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
        $model = new tblocation;
        
        $model->LocName = $request->LocName;
        $model->Price = $request->Price;
        $model->active = $request->active;
        $model->save();

        return redirect('superadmin/location');
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
    public function edit($LocID)
    {
        $loc = tblocation::find($LocID);
        return view('superadmin.tblocation.edit', compact('loc'), ["title" => "edit data"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $LocID)
    {
        $model = tblocation::find($LocID);
        
        $model->LocName = $request->LocName;
        $model->price = $request->price;
        $model->save();

        return redirect('superadmin/location');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($LocID)
    {
        $location = tblocation::find($LocID);
        $location->delete();
        return redirect('superadmin/location');
    }
}
