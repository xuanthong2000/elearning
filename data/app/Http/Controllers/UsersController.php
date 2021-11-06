<?php

namespace App\Http\Controllers;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    //
	function index(){
		// $users = DB::table('users')->take(10)->get();
        // dd($users);
		$users = DB::table('users')->select('users.id','users.name','users.email','users.phone');
        $users = $users->get();

        return view('/quanlykhachhang', compact('users'));
	}
    function create() {
        return view('/login2');
    }
    public function store(Request $request)
    {
        $users = new Users;
        $users->name = $request->name; 
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->phone = $request->phone;
        $users->address ='';
        $users->gender = 1;
        $users->is_admin = 1;

        $users->save();
        return back();
       
    }
    
}

