<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('master.siswa.index',[
            'siswa' => $siswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master.siswa.addsiswa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'about' => 'required|string',
            'photo' => 'image|file|max:3072',

        ]);
       

        if ($validator->fails()) {
            return redirect('/siswa')->withErrors($validator)->withInput();
        }
        
        $validatedData = $validator->getData();
        $validatedData['photo'] = $request->file('photo')->store('photos');

       
       
        
        Siswa::create($validatedData);


        return redirect('/siswa')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        if($siswa->image) {
                
            Storage::delete($siswa->image);
        }
        Siswa::destroy($siswa->id);
        return redirect('/siswa')->with('success', 'Post has been deleted!');
    }
}