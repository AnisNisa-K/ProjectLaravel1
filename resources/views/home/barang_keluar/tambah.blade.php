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
                        <h1>Halaman Tambah Data Barang Keluar</h1>
                        </div>
                        <div class="card-body">
                        <form action="/barang_keluar/simpan" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Barang</label>
                            <select name="id_barang" id="" class="form-control">
                                <option value="">Pilih Barang</option>
                                @foreach ($barang as $barang)
                                    <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>

                                @endforeach
                            </select>
                            @error('nama_barang')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Supplier</label>
                            <select name="id_supplier" id="" class="form-control">
                                <option value="">Pilih Supplier</option>
                                @foreach ($supplier as $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->nama_supplier}}</option>

                                @endforeach
                            </select>
                            @error('nama_supplier')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jumlah</label>
                            <input
                                type="number"
                                class="form-control"
                                name="jumlah"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                            @error('jumlah')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <a class="btn btn-warning" href="/barang_keluar"><i class="fas fa-arrow-left"></i> Kembali</a>
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
