<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Tambahkan ini untuk menggunakan fasilitas database

class RegisterAdminController extends Controller
{
    public function registerAdmin(Request $request)
    {
        $validatedData = $request->validate([
            'nama_admin' => 'required|string|max:50',
            'username' => 'required|string|max:30|unique:admins,username', // Pastikan ini sesuai dengan nama tabel di database
            'email' => 'required|string|email|max:50',
            'password' => 'required|string|min:8|max:225',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        // Menggunakan DB facade untuk menyimpan data ke database yang spesifik
        DB::table('admins')->insert([
            'Nama' => $validatedData['nama_admin'],
            'Username' => $validatedData['username'],
            'Email' => $validatedData['email'],
            'Password' => $validatedData['password'],
        ]);
        
        return redirect()->route('login')->with('success', 'Terima kasih sudah mendaftar');
    }

    public function showRegistrationForm()
    {
        return view('registeradmin');
    }
}
