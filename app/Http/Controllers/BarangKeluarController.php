<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use App\Models\Barang;
use App\Models\Supplier;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    public function index()
    {
        $barang_keluar = BarangKeluar::all();
        return view('home.barang_keluar.index', compact('barang_keluar'));
    }

    public function create()
    {
        $barang = Barang::all();
        $supplier = Supplier::all();
        return view('home.barang_keluar.tambah', compact('barang', 'supplier'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required|exists:barangs,id', // Memastikan id_barang ada di tabel barangs
            'nama_customer' => 'required',
            'jumlah' => 'required|numeric|min:1',
        ]);

        $id = $request->id_barang;
        $barang = Barang::find($id);

        $barang->decrement('stok', $request->jumlah);

        BarangKeluar::create([
            'id_barang' => $request->id_barang,
            'nama_customer' => $request->nama_customer,
            'jumlah' => $request->jumlah,
        ]);

        return redirect('/barang_keluar')->with('success', 'Barang Keluar berhasil ditambah');
    }

    public function show(string $id)
    {
        $barangKeluar = BarangKeluar::find($id);

        if (!$barangKeluar) {
            return redirect('/barang_keluar')->with('error', 'Barang Keluar tidak ditemukan!');
        }

        return view('home.barang_keluar.show', compact('barangKeluar'));
    }

    public function edit(string $id)
    {
        // Implementasi jika diperlukan
    }

    public function update(Request $request, string $id)
    {
        // Implementasi jika diperlukan
    }

    public function destroy(string $id)
    {
        // Implementasi jika diperlukan
    }
}
