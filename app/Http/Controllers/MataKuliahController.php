<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtmatakuliah = MataKuliah::all();
        return view("matakuliah.matakuliah", compact('dtmatakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $matkul = MataKuliah::all();
        return view('matakuliah.create-matakuliah', compact('matkul'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        MataKuliah::created([
            'matakuliah' => $request->matakuliah
        ]);
        return redirect('matakuliah');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
