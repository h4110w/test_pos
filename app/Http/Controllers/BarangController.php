<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::latest()->paginate(config('pos.pagination'));
        return view('barang.index', [
        'barangs' => $barangs
        ]);
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'gambar_barang' => 'required'
        ]);

        Barang::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'gambar_barang' => $request->gambar_barang
        ]);
        return redirect()->route('barang.index')->with('success', 'Simpan Barang sukses!');
    }

    public function show()
    {
        return view('barang.show', compact('barang'));
    }

    public function edit(Barang $barang)
    {
        return view('barang.edit', [
            'barang' => $barang
        ]);
    }

    public function update(Request $request, Barang $barang)
    {
        $barang->update([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'gambar_barang' => $request->gambar_barang
        ]);
        return redirect()->route('barang.index')->with('info', 'Update Barang Sukses');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return back()->with('danger', 'Data Barang berhasil dihapus!');
    }
}
