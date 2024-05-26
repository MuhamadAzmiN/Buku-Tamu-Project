<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        
        return view('dashboard.user.detail', [
            "title" => "Halaman Detail",
            "user" => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.user.edit', [
            "title" => "Halaman edit"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            "name" => "required|max:255",
            "nis" => "required",
            "rayon" => "required",
            "romble" => 'required',
        ];

        // if($request->slug !== $user->slug)
        // {
        //     $rules['slug'] = 'required|unique:posts';
        // }   

        $validateData = $request->validate($rules);
        $validateData["id"] = auth()->user()->id;

        // if($request->file('image')){

        //     if($request->oldImage){
        //         Storage::delete($request->oldImage);
        //     }
        //     $validateData["image"] = $request->file('image')->store('post-image');
        // }           

      

        
        User::where('id', $user->id)
                    ->update($validateData);

        // if($user->user->id !== auth()->user()->id) {
        //                 abort(403);
        // }
        

        return redirect('/dataSiswa')->with('success', "Berhasil Terupdate");
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        
        User::destroy($user->id);

        return redirect('/dataSiswa')->with('success', "User Berhasil Di hapus");
    }
    
}