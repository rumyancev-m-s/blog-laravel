<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller {
    public function index(Request $request) {
        if ($request->session()->has('key')) {
            return view('home.index');
        } else {
            return view('login.index');
        }
    }
    public function store(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]))
        {
            if (Auth::user()->is_admin){
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('home');
            }
        }
        

        // return redirect()->back();
    }
}