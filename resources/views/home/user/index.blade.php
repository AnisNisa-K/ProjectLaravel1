@extends('layouts.master')
@section('tittle', 'user')
@section('content')

<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Data User</h3>
                            <a href="/user/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($user as $user )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->password }}</td>
                                            <td><a href="/user/{{ $user->id }}/edit" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Edit</a>
                                            <a href="/user/{{ $user->id }}/hapus" class="btn btn-danger" onclick="return confirm('Yakin Data Akan Dihapus?')"><i class="fas fa-trash"></i> Hapus</a></td>
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
