<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class MahasiswaStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtmahasiswa = Mahasiswa::with('prodi')->latest()->paginate(2);
        return view("mahasiswa.mahasiswa", compact('dtmahasiswa'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::all();
        return view('mahasiswa.create-mahasiswa', compact('prodi'));
    }
    public function details()
    {
        return view('mahasiswa.detail-mahasiswa');
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
            "NamaProdi" => $request->NamaProdi,
            "prodi" => $request->prodi_id
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
    public function edit($id)
    {
        $prodi = Prodi::all();
        $mahasiswa = Mahasiswa::with('prodi')->findorfail($id);
        return view('mahasiswa.edit-mahasiswa',compact('mahasiswa','prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mahasiswa = Mahasiswa::findorfail($id);
        $mahasiswa->update($request->all());
        return redirect('mahasiswa')->with('success', 'berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::findorfail($id);
        $mahasiswa->delete();
        return back()->with('info','data berhasil dihapus');
    }
}
