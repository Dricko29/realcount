<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view ('auth.register');
    }

        public function store(Request $request){
        
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users|min:3',
            'password' => 'required|min:6',
        ],[
            'name.required' => 'nama tidak boleh kosong ',
            'username.required' => 'username tidak boleh kosong',
            'username.unique' => 'username sudah ada',
            'username.min' => 'minimal panjang username tiga karakter',
            'password.min' => 'minimal panjang password tiga karakter',
            'password.required' => 'password tidak boleh kosong',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);
        return redirect('login')->with('status', 'Berhasil mendaftar silahkan login !!!');
        
    }
}
