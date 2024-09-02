@extends('layouts.master')
@section('tittle', 'jenis')
@section('content')

<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Data Jenis Barang</h3>
                            <a href="/jenis/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
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
                                            <th scope="col">Nama</th>
                                            <th scope="col">Nama Jenis</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($jenis as $jenis )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $jenis->nama_jenis }}</td>
                                            <td><a href="/jenis/{{ $jenis->id }}/edit" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Edit</a></td>
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
