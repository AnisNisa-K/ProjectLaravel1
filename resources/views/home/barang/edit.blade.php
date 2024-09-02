@extends('layouts.master')
@section('tittle', 'barang')
@section('content')

<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3> Halaman Edit Data Barang</h3>
                        </div>
                        <div class="card-body">
                            <form action="/barang/{{ $barang->id }}/update" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Gambar</label>
                                    <input
                                        type="file"
                                        class="form-control"
                                        name="gambar"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
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
                                        value="{{ old('nama_barang',$barang->nama_barang) }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('nama_barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Id Jenis</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="id_jenis"
                                        id="id_jenis"
                                        value="{{ $barang->id_jenis }}"
                                        aria-describedby="helpId"
                                        placeholder="isi id jenis"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Harga Beli</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="harga_beli"
                                        id="harga_beli"
                                        value="{{ $barang->harga_beli }}"
                                        aria-describedby="helpId"
                                        placeholder="isi harga beli"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Harga Jual</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="harga_jual"
                                        id="harga_jual"
                                        value="{{ $barang->harga_jual }}"
                                        aria-describedby="helpId"
                                        placeholder="isi harga jual"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Stok</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="stok"
                                        id="stok"
                                        value="{{ $barang->stok }}"
                                        aria-describedby="helpId"
                                        placeholder="isi stok"
                                    />
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
