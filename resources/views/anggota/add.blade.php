@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Anggota</div>

                <div class="card-body">
                    <form method="POST" action="/anggota/store">
                        @csrf

                        <div class="form-group row">
                            <label for="NRP" class="col-md-4 col-form-label text-md-right">NRP</label>

                            <div class="col-md-6">
                                <input id="NRP" type="text"
                                class="form-control @error('NRP') is-invalid @enderror"
                                name="NRP" value="{{ old('NRP') }}"
                                autocomplete="NRP" autofocus pattern="[0-9]{10-14}">

                                @error('NRP')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="namaDepan" class="col-md-4 col-form-label text-md-right">Nama Depan</label>

                            <div class="col-md-6">
                                <input id="namaDepan" type="text"
                                class="form-control @error('namaDepan') is-invalid @enderror"
                                name="namaDepan" value="{{ old('namaDepan') }}"
                                autocomplete="namaDepan">

                                @error('namaDepan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="namaBelakang" class="col-md-4 col-form-label text-md-right">Nama Belakang</label>

                            <div class="col-md-6">
                                <input id="namaBelakang" type="text"
                                class="form-control @error('namaBelakang') is-invalid @enderror"
                                name="namaBelakang" autocomplete="new-namaBelakang">

                                @error('namaBelakang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="namaPanggilan" class="col-md-4 col-form-label text-md-right">Nama Panggilan</label>

                            <div class="col-md-6">
                                <input id="namaPanggilan" type="text"
                                class="form-control @error('namaPanggilan') is-invalid @enderror"
                                name="namaPanggilan" autocomplete="new-namaPanggilan">

                                @error('namaPanggilan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="asalJurusan" class="col-md-4 col-form-label text-md-right">Departemen</label>

                            <div class="col-md-6">
                                <input id="asalJurusan" type="text"
                                class="form-control @error('asalJurusan') is-invalid @enderror"
                                name="asalJurusan" autocomplete="new-asalJurusan">

                                @error('asalJurusan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ttl" class="col-md-4 col-form-label text-md-right">Tanggal Lahir</label>

                            <div class="col-md-6">
                                <input id="ttl" type="date"
                                class="form-control @error('ttl') is-invalid @enderror"
                                name="ttl" autocomplete="new-ttl">

                                @error('ttl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text"
                                class="form-control @error('alamat') is-invalid @enderror"
                                name="alamat" autocomplete="new-alamat">

                                @error('namaBelakang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="noHP" class="col-md-4 col-form-label text-md-right">Nomor HP</label>

                            <div class="col-md-6">
                                <input id="noHP" type="text"
                                class="form-control @error('noHP') is-invalid @enderror"
                                name="noHP" autocomplete="new-noHP" pattern="[0-9]{10-14}">

                                @error('noHP')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="divisi_id" class="col-md-4 col-form-label text-md-right">Nomor Divisi</label>

                            <div class="col-md-6">
                                <input id="divisi_id" type="text"
                                class="form-control @error('divisi_id') is-invalid @enderror"
                                name="divisi_id" autocomplete="new-divisi_id">

                                @error('divisi_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Tambah kedalam basis data
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
