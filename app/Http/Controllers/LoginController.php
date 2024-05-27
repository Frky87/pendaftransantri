<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $data = Admin::where('username', $request->input('username'))->first();

        if ($data && Hash::check($request->input('password'), $data->Password)) {
            session(['admin' => $data]);
            session(['nama_admin' => $data->nama_admin]);
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }
    public function showLoginForm()
    {
        return view('login');
    }
    
}
