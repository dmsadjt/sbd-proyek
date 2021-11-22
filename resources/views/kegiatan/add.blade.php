@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Kegiatan</div>

                <div class="card-body">
                    <form method="post" action="/kegiatan/store">
                        @csrf

                        <div class="form-group row">
                            <label for="noKegiatan" class="col-md-4 col-form-label text-md-right">Nomor Kegiatan</label>

                            <div class="col-md-6">
                                <input id="noKegiatan" type="text"
                                class="form-control @error('noKegiatan') is-invalid @enderror"
                                name="noKegiatan" value="{{ old('noKegiatan') }}"
                                autocomplete="noKegiatan" autofocus>

                                @error('noKegiatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="judulKegiatan" class="col-md-4 col-form-label text-md-right">Judul Kegiatan</label>

                            <div class="col-md-6">
                                <input id="judulKegiatan" type="text"
                                class="form-control @error('judulKegiatan') is-invalid @enderror"
                                name="judulKegiatan" value="{{ old('judulKegiatan') }}"
                                autocomplete="judulKegiatan">

                                @error('judulKegiatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kepalaDivisi" class="col-md-4 col-form-label text-md-right">Jenis Kegiatan</label>

                            <div class="col-md-6">

                                <select name="jenisKegiatan" id="jenisKegiatan" class="custom-select @error('kepalaDivisi') is-invalid @enderror">
                                    <option value="proker">Proker</option>
                                    <option value="agenda">Agenda</option>
                                </select>



                                @error('jenisKegiatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jadwalKegiatan" class="col-md-4 col-form-label text-md-right">Judul Kegiatan</label>

                            <div class="col-md-6">
                                <input id="jadwalKegiatan" type="date"
                                class="form-control @error('jadwalKegiatan') is-invalid @enderror"
                                name="jadwalKegiatan" value="{{ old('jadwalKegiatan') }}"
                                autocomplete="jadwalKegiatan">

                                @error('jadwalKegiatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tuk" class="col-md-4 col-form-label text-md-right">TUK</label>

                            <div class="col-md-6">
                                <input id="tuk" type="text"
                                class="form-control @error('tuk') is-invalid @enderror"
                                name="tuk" value="{{ old('tuk') }}"
                                autocomplete="tuk">

                                @error('tuk')
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
