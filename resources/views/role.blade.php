@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pilih View</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="text-center p-5">Hi, pilih jabatan anda untuk melanjutkan</h1>

                    <div class="row p-3 justify-content-center">
                        <a href="/home/ksb" class="btn btn-primary">KSB</a>
                    </div>
                    <div class="row p-3 justify-content-center">
                        <a href="/home/kadiv" class="btn btn-primary">Kepala Divisi</a>
                    </div>
                    <div class="row p-3 justify-content-center">
                        <a href="/home/anggota" class="btn btn-primary">Anggota</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
