<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.index', [
            "title" => "home",
            "data" => User::all()
        ]);
    }

    public function detail(User $user)
    {   
        return view('dashboard.detail',[
            "title" => "halaman detail",
            "user" => $user
        ]);
    }

    public function dataSiswa()
    {   
        return view('dashboard.dataSiswa', [
            "title" => "dataSiswa",
            "data" => User::paginate(10)
        ]);
    }

}
