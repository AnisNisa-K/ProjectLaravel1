<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    public function index()
    {
        $barang_keluar = BarangMasuk::all();
        return view('home.barang_keluar.index', compact('barang_keluar'));
    }
}
