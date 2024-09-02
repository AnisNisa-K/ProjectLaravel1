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
                        <div class="card-body">
                        <h1>Edit Data Jenis</h1>
                    <form action="/jenis/{{ $jenis->id }}/update" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Jenis</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nama_jenis"
                                id="nama_jenis"
                                value="{{ $jenis->nama_jenis }}"
                                aria-describedby="helpId"
                                placeholder="isi nama jenis"
                            />
                        </div>
                        <a class="btn btn-warning" href="/jenis"><i class="fas fa-arrow-left"></i> Kembali</a>
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