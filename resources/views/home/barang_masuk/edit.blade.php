@extends('layouts.master')
@section('title', 'Detail Barang Masuk')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <!-- Gambar Barang -->
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{ asset('/storage/products/' . $barang->gambar) }}" class="img-fluid" alt="{{ $barang->nama_barang }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Detail Barang -->
                    <div class="card">
                        <div class="card-body">
                            <h3>{{ $barang->nama_barang }}</h3>
                            <p><strong>Harga:</strong> Rp {{ number_format($barang->harga, 2, ',', '.') }}</p>
                            <p><strong>Tanggal Masuk:</strong> {{ $barang->tanggal_masuk->format('d-m-Y H:i') }}</p>
                            <p><strong>Jumlah:</strong> {{ $barang->jumlah }}</p>
                        </div>
                    </div>

                    <!-- Tombol Kembali -->
                    <div class="card-footer">
                        <a href="/barang_masuk" class="btn btn-warning">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
