<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('dashboard.register.index', [
            "title" => "halaman register"
        ]);
    }


    public function store(Request $request)
    {
    $validateData = $request->validate([
        "name" => 'required|max:224',
        "nis" => ['required', 'min:3', 'max:224', 'unique:users'],
        "rayon" => 'required',
        "romble" => "required",
        "password" => 'required|min:5|max:255'            
    ]);
    // cara yang pertama
    $validateData['password'] = bcrypt($validateData["password"]);

    // cara yang kedua

    // $validateData["password"] = Hash::make($validateData["password"]);
    User::create($validateData);
    session()->flash('success', "Registrasi Berhasil Silahkan Login");
    return redirect('/login');
    }



}
