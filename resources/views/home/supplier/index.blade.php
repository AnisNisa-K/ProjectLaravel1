@extends('layouts.master')
@section('tittle', 'supplier')
@section('content')

<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Data supplier</h3>
                            <a href="/supplier/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
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
                                            <th scope="col">ID</th>
                                            <th scope="col">Nama Supplier</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">No Telp</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($supplier as $supplier )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $supplier->nama_supplier }}</td>
                                            <td>{{ $supplier->alamat }}</td>
                                            <td>{{ $supplier->no_telp }}</td>
                                            <td><a href="/supplier/{{ $supplier->id }}/edit" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Edit</a>
                                            <a href="/supplier/{{ $supplier->id }}/hapus" class="btn btn-danger" onclick="return confirm('Yakin Data Akan Dihapus?')"><i class="fas fa-trash"></i> Hapus</a></td>
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
