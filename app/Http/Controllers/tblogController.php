<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblog;
use Illuminate\Support\Facades\DB;
class tblogController extends Controller
{
    public function index(){
        
        // $cari = tblog::all();
        // if(request('cari')){
        //     $cari->where('name', 'like', '%' . request('cari') . '%');    
        // }
        $datas = tblog::all();
        return view('superadmin.tblog.index', compact('datas'), [
            "title" => "Blog",
           
        ]);
    }
    public function create(){
        $kantin = new tblog;
        return view('superadmin.tblog.create',compact('kantin'),[
            "title" => "tambah data",
        ]);
    }
    public function store(Request $request){
        $model = new tblog;
        $model -> UserID = $request -> UserID;
        $model -> ModulID = $request -> ModulID;
        $model -> Activity = $request -> Activity;
       
        $model -> save();

        return redirect('superadmin/blog');
    }
    public function edit($LogID){
        $log = tblog::find($LogID);
        return view('superadmin.tblog.ubah',compact('log'),[
            "title" => "ubah data",
        ]);
    }
    public function update(Request $request, $LogID){
        $model = tblog::find($LogID);
        $model -> UserID = $request -> UserID;
        $model -> ModulID = $request -> ModulID;
        $model -> Activity = $request -> Activity;
        $model -> save();

        return redirect('superadmin/blog');
    }
    public function destroy($LogID){
        $kantin = tblog::find($LogID);
        $kantin->delete();
        return redirect('superadmin/blog');
    }
    // public function search(Request $request)
	// {
    //     $datas = $_GET('cari');
    //     $kantin = tblog::where('name','like','%' .$datas. '%')->get();
    //     return view('kantin', compact('datas'));
 
	// }
}

