@extends('layouts.master')
@section('tittle', 'barang_keluar')
@section('content')

<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Data Barang Keluar</h3>
                            <a href="/barang_keluar/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                        <div class="card-body">
                            <div
                                class="table-responsive"
                            >
                                <table
                                    class="table"
                                >
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">Nama Customer</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($barang_keluar as $barang_keluar )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $barang_keluar->Barang->nama_barang}}</td></td>
                                            <td>{{ $barang_keluar->nama_customer }}</td>
                                            <td>{{ $barang_keluar->jumlah }}</td>
                                            <td><a href="/barang_keluar/{{ $barang_keluar->id }}/show" class="btn btn-secondary"><i class="fas fa-eye"></i> Detail</a></td>
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
