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
                            <h3>Halaman Tambah Data Barang</h3>
                        </div>
                        <div class="card-body">
                        <form action="/barang/simpan" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Gambar</label>
                            <input
                                type="file"
                                class="form-control"
                                name="gambar"
                                id=""
                                aria-describedby="helpId"
                                placeholder="isi gambar"
                            />
                            @error('gambar')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Barang</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nama_barang"
                                id=""
                                value="{{ old('nama_barang') }}"
                                aria-describedby="helpId"
                                placeholder="isi nama barang"
                            />
                            @error('nama_barang')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Id Jenis</label>
                            <select name="id_jenis" id="" class="form-control">
                                <option value="">Pilih Jenis</option>
                                @foreach ($jenis as $jenis )
                                    <option value="{{ $jenis->id }}">{{ $jenis->nama_jenis }}</option>

                                @endforeach
                            </select>
                            @error('id_jenis')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Harga Beli</label>
                            <input
                                type="text"
                                class="form-control"
                                name="harga_beli"
                                id="harga_beli"
                                value="{{ old('harga_beli') }}"
                                aria-describedby="helpId"
                                placeholder="isi harga beli"
                            />
                            @error('harga_beli')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Harga Jual</label>
                            <input
                                type="number"
                                class="form-control"
                                name="harga_jual"
                                id="harga_jual"
                                value="{{ old('harga_jual') }}"
                                aria-describedby="helpId"
                                placeholder="isi harga jual"
                            />
                            @error('harga_jual')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Stok</label>
                            <input
                                type="number"
                                class="form-control"
                                name="stok"
                                id="stok"
                                value="{{ old('stok') }}"
                                aria-describedby="helpId"
                                placeholder="isi stok"
                            />
                            @error('stok')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <a class="btn btn-warning" href="/barang"><i class="fas fa-arrow-left"></i> Kembali</a>
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
