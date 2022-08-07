<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbmodul;

class tbmodulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = tbmodul::all();
        return view(
            'superadmin.tbmodul.modul',
            compact('datas'),
            [
                "title" => "Modul"
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
        $modul = new tbmodul;
        return view(
            'superadmin.tbmodul.create',
            compact('modul'),
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
        $modul = new tbmodul;
        $modul->ModulID = $request->ModulID;
        $modul->ModulName = $request->ModulName;
        $modul->Level = $request->Level;
        $modul->Active = $request->Active;
        $modul->save();

        return redirect('superadmin/modul');
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
    public function edit($ModulID)
    {
        $modul = tbmodul::find($ModulID);
        return view('superadmin.tbmodul.edit', compact('modul'), ["title" => "Edit Data"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ModulID)
    {
        $modul = tbmodul::find($ModulID);
        
        $modul->ModulName = $request->ModulName;
        $modul->Level = $request->Level;
        $modul->Active = $request->Active;
        $modul->save();

        return redirect('superadmin/modul');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ModulID)
    {
        $modul = tbmodul::find($ModulID);
        $modul->delete();
        return redirect('superadmin/modul');
    }
}
