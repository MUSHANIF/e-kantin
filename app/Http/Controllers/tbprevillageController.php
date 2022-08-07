<?php

namespace App\Http\Controllers;

use App\Models\tbprevilage;
use Illuminate\Http\Request;

class tbprevillageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = tbprevilage::all();
        return view(
            'superadmin.tbprevillage.previllage',
            compact('datas'),
            [
                "title" => "Previllage"
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
        $previllage = new tbprevilage;
        return view(
            'superadmin.tbprevillage.create',
            compact('previllage'),
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
        $previllage = new tbprevilage;
        $previllage->UserID = $request->UserID;
        $previllage->ModulID = $request->ModulID;
        $previllage->Previllage = $request->Previllage;
        $previllage->Level = $request->Level;
        $previllage->active = $request->active;
        $previllage->save();

        return redirect('superadmin/previllage');
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
        $previllage = tbprevilage::find($id);
        return view('superadmin.tbprevillage.edit', compact('previllage'), ["title" => "Edit Data"]);
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
        $previllage = tbprevilage::find($id);
        $previllage->UserID = $request->UserID;
        $previllage->ModulID = $request->ModulID;
        $previllage->Previllage = $request->Previllage;
        $previllage->Level = $request->Level;
        $previllage->Active = $request->Active;
        $previllage->save();

        return redirect('superadmin/previllage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $previllage = tbprevilage::find($id);
        $previllage->delete();
        return redirect('superadmin/previllage');
    }
}
