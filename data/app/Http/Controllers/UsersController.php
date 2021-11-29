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

        return view('/manage/quanlykhachhang', compact('users'));
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
    public function getLogin()
    {
        if (Auth::check()) {
            return redirect('index');
        } else {
            return view('client/login2');
        }

    }

    /**
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function postLogin(LoginRequest $request)
    {
        $login = [
            
            'email' => $request->txtEmail,
            'password' => $request->txtPassword,

            
        ];
        if (Auth::attempt($login)) {
            return redirect('index');
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }

    /**
     * action admincp/logout
     * @return RedirectResponse
     */
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('/login');
    }
    
}

