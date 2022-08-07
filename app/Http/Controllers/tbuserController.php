<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request; 

// use App\Models\tbuser;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class tbuserController extends Controller
{
    public function index(Request $request){
        
        
        // if(request('cari')){
        //     $cari->where('name', 'like', '%' . request('cari') . '%');    
        // }
        $cari = $request->cari;
        $datas = DB::table('users')
            ->where('level', '!=', 5)
            ->where('name','like',"%".$cari."%")
            ->get();
        return view('superadmin.tbuser.index', compact('datas'), [
            "title" => "User",
           
        ]);
    }
    public function create(){
        $kantin = new User;
        return view('superadmin.tbuser.create',compact('kantin'),[
            "title" => "tambah data",
        ]);
    }
    public function store(Request $request){
        // $model = new User;
        // $model -> StoreID = $request -> StoreID;
        // $model -> name = $request -> name;
        // $model -> email = $request -> email;
        // $model -> password = $request -> password;
        // $model -> Mobile = $request -> Mobile;
        // $model -> Active = $request -> Active;
        // $model -> level = $request -> level;
        $userid = request()->get('StoreID');
        $username = request()->get('name');
		$email = request()->get('email');
		$password = request()->get('password');
        $Mobile = request()->get('Mobile');
        $Active = request()->get('Active');
        $level = request()->get('level');
		$encrypted_password = bcrypt($password);

		$users = new User();
        $users->StoreID = $userid;
		$users->name = $username;
		$users->email = $email;
		$users->password = $encrypted_password;
        $users->Mobile = $Mobile;
        $users->Active = $Active;
        $users->level = $level;

		$users->save();
        // $model -> save();

        return redirect('superadmin/user');
    }
    public function edit($UserID){
        $log = User::find($UserID);
        return view('superadmin.tbuser.ubah',compact('log'),[
            "title" => "ubah data user",
        ]);
    }
    public function update(Request $request, $UserID){
        $model = User::find($UserID);
        $model -> StoreID = $request->StoreID;
        $model -> name = $request->name;
        $model -> email = $request->email;
        $model -> password = $request->password;
        $model -> Mobile = $request->Mobile;
        $model -> Active = $request->Active;
        $model -> level = $request ->level;
        $model -> save();

        return redirect('superadmin/user');
    }
    public function destroy($UserID){
        $kantin = User::find($UserID);
        $kantin->delete();
        return redirect('superadmin/user');
    }
}
