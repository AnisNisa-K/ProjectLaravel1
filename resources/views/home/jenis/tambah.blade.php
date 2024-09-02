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
                        <h1>Halaman Tambah Data Jenis</h1>
                        </div>
                        <div class="card-body">
                        <form action="/jenis/simpan" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Jenis</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nama_jenis"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
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