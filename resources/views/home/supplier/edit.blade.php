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
                        <div class="card-body">
                        <h1>Edit Data Supplier</h1>
                    <form action="/supplier/{{ $supplier->id }}/update" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Supplier</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nama_supplier"
                                id="nama_supplier"
                                value="{{ $supplier->nama_supplier }}"
                                aria-describedby="helpId"
                                placeholder="isi nama supplier"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Alamat</label>
                            <input
                                type="text"
                                class="form-control"
                                name="alamat"
                                id="alamat"
                                value="{{ $supplier->alamat }}"
                                aria-describedby="helpId"
                                placeholder="isi alamat anda"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">No Telp</label>
                            <input
                                type="number"
                                class="form-control"
                                name="no_telp"
                                id="no_telp"
                                value="{{ $supplier->no_telp }}"
                                aria-describedby="helpId"
                                placeholder="isi no_telp anda"
                            />
                        </div>
                        <a class="btn btn-warning" href="/supplier"><i class="fas fa-arrow-left"></i> Kembali</a>
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
