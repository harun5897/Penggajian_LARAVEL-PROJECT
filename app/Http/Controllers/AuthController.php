<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }

    public function postmasuk(Request $request)
    {
        $notif = 'sukses';
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard')->with(['success' => 'Pesan Berhasil']);

        }
        return redirect('/masuk')->with(['error' => 'Pesan Berhasil']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('masuk');
    }
}
