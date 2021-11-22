@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Tambah Kegiatan</div>

                <div class="card-body">
                    <form method="post" action="/jadwal/store">
                        @csrf

                        <div class="form-group row">
                            <label for="noJadwal" class="col-md-4 col-form-label text-md-right">Nomor Jadwal</label>

                            <div class="col-md-6">
                                <input id="noJadwal" type="text"
                                class="form-control @error('noJadwal') is-invalid @enderror"
                                name="noJadwal" value="{{ old('noJadwal') }}"
                                autocomplete="noJadwal" autofocus>

                                @error('noJadwal')
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
                                name="divisi_id" value="{{ old('divisi_id') }}"
                                autocomplete="divisi_id">

                                @error('divisi_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="senin" class="col-md-4 col-form-label text-md-right">Senin</label>
                            <div class="col-md-6">
                                <select name="senin" id="senin" class="custom-select" required>
                                    <option value="sibuk">Sibuk</option>
                                    <option value="kosong">Kosong</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="selasa" class="col-md-4 col-form-label text-md-right">Selasa</label>
                            <div class="col-md-6">
                                <select name="selasa" id="selasa" class="custom-select" required>
                                    <option value="sibuk">Sibuk</option>
                                    <option value="kosong">Kosong</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rabu" class="col-md-4 col-form-label text-md-right">Rabu</label>
                            <div class="col-md-6">
                                <select name="rabu" id="rabu" class="custom-select" required>
                                    <option value="sibuk">Sibuk</option>
                                    <option value="kosong">Kosong</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kamis" class="col-md-4 col-form-label text-md-right">Kamis</label>
                            <div class="col-md-6">
                                <select name="kamis" id="kamis" class="custom-select" required>
                                    <option value="sibuk">Sibuk</option>
                                    <option value="kosong">Kosong</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumat" class="col-md-4 col-form-label text-md-right">Jumat</label>
                            <div class="col-md-6">
                                <select name="jumat" id="jumat" class="custom-select" required>
                                    <option value="sibuk">Sibuk</option>
                                    <option value="kosong">Kosong</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sabtu" class="col-md-4 col-form-label text-md-right">Sabtu</label>
                            <div class="col-md-6">
                                <select name="sabtu" id="sabtu" class="custom-select" required>
                                    <option value="sibuk">Sibuk</option>
                                    <option value="kosong">Kosong</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="minggu" class="col-md-4 col-form-label text-md-right">Minggu</label>
                            <div class="col-md-6">
                                <select name="minggu" id="minggu" class="custom-select" required>
                                    <option value="sibuk">Sibuk</option>
                                    <option value="kosong">Kosong</option>
                                </select>
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
