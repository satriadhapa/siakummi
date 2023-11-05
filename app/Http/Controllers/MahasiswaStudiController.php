<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class MahasiswaStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtmahasiswa = Mahasiswa::paginate(2);
        return view("mahasiswa.mahasiswa", compact('dtmahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create-mahasiswa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Mahasiswa::create([
            "NIM" => $request->NIM,
            "NamaLengkap" => $request->NamaLengkap,
            "MataKuliah" => $request->MataKuliah,
            "NamaProdi" => $request->NamaProdi
        ]);

        return redirect('mahasiswa')->with('success', 'berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($NIM)
    {
        $mahasiswa = Mahasiswa::findorfail($NIM);
        return view('mahasiswa.edit-mahasiswa',compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $NIM)
    {
        $mahasiswa = Mahasiswa::findorfail($NIM);
        $mahasiswa->update($request->all());
        return redirect('mahasiswa')->with('success', 'berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $NIM)
    {
        $mahasiswa = Mahasiswa::findorfail($NIM);
        $mahasiswa->delete();
        return back()->with('info','data berhasil dihapus');
    }
}
