@extends('layouts.master')
@section('tittle', 'barang')
@section('content')

<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            @if (session('success'))
                                <div class="alert alert-info">
                                        {{ session('success') }}
                                </div>
                            @endif
                            <h3> Halaman Data Barang</h3>
                            <a href="/barang/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">ID Jenis</th>
                                            <th scope="col">Harga Beli</th>
                                            <th scope="col">Harga Jual</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($barang as $barang )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="text-center">
                                                <img src="{{ asset('/storage/products/'.$barang->gambar) }}"
                                                class="rounded" style="width: 150px">
                                            </td>
                                            <td>{{ $barang->nama_barang }}</td>
                                            <td>{{ $barang->Jenis->nama_jenis }}</td>
                                            <td>Rp. {{ number_format($barang->harga_beli) }}</td>
                                            <td>Rp. {{ number_format($barang->harga_jual) }}</td>
                                            <td>{{ $barang->stok }}</td>
                                            <td><a class="btn btn-warning" href="/barang/{{ $barang->id }}/show"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                <a class="btn btn-danger" href="/barang/{{ $barang->id }}/delete"
                                                    onclick="return confirm('Yakin Mau Dihapus?')"><i class="fas fa-trash"></i> Delete</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
