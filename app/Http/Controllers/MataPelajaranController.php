<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use App\Models\SubMataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mataPelajaran = MataPelajaran::all();

        return view('mata_pelajaran.index',compact('mataPelajaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mata_pelajaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kode' => 'required|string|max:255|unique:mata_pelajarans,kode',
            'deskripsi' => 'nullable|string',
        ]);

        MataPelajaran::create([
            'nama' => $request->nama,
            'kode' => $request->kode,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.mata_pelajaran')->with('success', 'Mata Pelajaran berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $subMataPelajaran = SubMataPelajaran::where('mata_pelajaran_id', $id);
        $mataPelajaran = MataPelajaran::findOrFail($id);
        return view('mata_pelajaran.detail',compact('mataPelajaran', 'subMataPelajaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pelajaran = MataPelajaran::findOrFail($id);
        return view('mata_pelajaran.edit',compact('pelajaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kode' => 'required|string|max:255|unique:mata_pelajarans,kode,'.$id,
            'deskripsi' => 'nullable|string',
        ]);
        $mataPelajaran = MataPelajaran::findOrFail($id);
        $mataPelajaran->nama = $request->nama;
        $mataPelajaran->kode = $request->kode;
        $mataPelajaran->deskripsi = $request->deskripsi;
        $mataPelajaran->save();

        return redirect()->route('admin.mata_pelajaran')->with('success', 'Mata Pelajaran berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mataPelajaran = MataPelajaran::findOrFail($id);
        $mataPelajaran->delete();

        return redirect()->route('admin.mata_pelajaran')->with('success', 'Mata Pelajaran berhasil dihapus!');
    }
}
