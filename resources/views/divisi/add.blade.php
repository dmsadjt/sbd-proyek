@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Divisi</div>

                <div class="card-body">
                    <form method="POST" action="/divisi/store">
                        @csrf

                        <div class="form-group row">
                            <label for="noDivisi" class="col-md-4 col-form-label text-md-right">Nomor Divisi</label>

                            <div class="col-md-6">
                                <input id="noDivisi" type="text"
                                class="form-control @error('noDivisi') is-invalid @enderror"
                                name="noDivisi" value="{{ old('noDivisi') }}"
                                autocomplete="noDivisi" autofocus>

                                @error('noDivisi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="namaDivisi" class="col-md-4 col-form-label text-md-right">Nama Divisi</label>

                            <div class="col-md-6">
                                <input id="namaDivisi" type="text"
                                class="form-control @error('namaDivisi') is-invalid @enderror"
                                name="namaDivisi" value="{{ old('namaDivisi') }}"
                                autocomplete="namaDivisi">

                                @error('namaDivisi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kepalaDivisi" class="col-md-4 col-form-label text-md-right">{{ __('Kepala Divisi') }}</label>

                            <div class="col-md-6">
                                <input id="kepalaDivisi" type="text"
                                class="form-control @error('kepalaDivisi') is-invalid @enderror"
                                name="kepalaDivisi" autocomplete="new-kepalaDivisi">

                                @error('kepalaDivisi')
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
