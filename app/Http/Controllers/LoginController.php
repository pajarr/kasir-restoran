<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('kasir.login');
    }
    public function index2()
    {
        return view('admin.login');
    }
    public function index3()
    {
        return view('manager.login');
    }

    public function authanticate(Request $request)
    {

        $login = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            return redirect()->intended(route('kasir.index'));
        }

        return back()->with('loginError', 'Username, Password atau Role Anda salah!');
    }


    public function authanticate2(Request $request)
    {

        $login = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();

            return redirect()->intended(route('admin.index'));
        }

        return back()->with('loginError', 'Username, Password atau Role Anda salah!');
    }

    public function authanticate3(Request $request)
    {

        $login = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            return redirect()->intended(route('manager.index'));
        }

        return back()->with('loginError', 'Username, Password atau Role Anda salah!');
    }
}
