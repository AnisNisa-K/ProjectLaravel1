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
                        <div class="card-body">
                        <h1>Edit Data User</h1>
                    <form action="/user/{{ $user->id }}/update" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                id="name"
                                value="{{ $user->name }}"
                                aria-describedby="helpId"
                                placeholder="isi nama user"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input
                                type="text"
                                class="form-control"
                                name="email"
                                id="email"
                                value="{{ $user->email }}"
                                aria-describedby="helpId"
                                placeholder="isi email anda"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input
                                type="password"
                                class="form-control"
                                name="password"
                                id="password"
                                value="{{ $user->password }}"
                                aria-describedby="helpId"
                                placeholder="isi password anda"
                            />
                        </div>
                        <a class="btn btn-warning" href="/user"><i class="fas fa-arrow-left"></i> Kembali</a>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Simpan</button>
                    </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
