<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt ( array (
            'email' => $request->get ( 'email' ),
            'password' => $request->get ( 'password' )
        ) )) {
            session ( [
                'email' => $request->get ( 'email' )
            ] );
            $user = Auth::user();
            if (!empty($user->roles()->first()) && $user->roles()->first()->name === "admin" ) {
                return redirect('/admin/home');
            } else {
                return Redirect::back()->withErrors(['Taì khoản không phải admin']);
            }
        } else {
            return Redirect::back()->withErrors(['Tài khoản hoặc mật khẩu sai']);
        }
    }
}
