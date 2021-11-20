@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>You are logged in!</h1>

                    <div class="d-flex justify-content-between">
                        <a class="btn btn-primary" href="/divisi/index">
                            Divisi
                        </a>
                        <div class="btn btn-primary">
                            Anggota
                        </div>
                        <div class="btn btn-primary">
                            Proker dan Agenda
                        </div>
                        <div class="btn btn-primary">
                            Jadwal Kesibukan
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
