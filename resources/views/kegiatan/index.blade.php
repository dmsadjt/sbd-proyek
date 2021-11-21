
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

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Nomor Kegiatan</th>
                            <th scope="col">Judul Kegiatan</th>
                            <th scope="col">Jenis Kegiatan</th>
                            <th scope="col">Jadwal Kegiatan</th>
                            <th scope="col">TUK</th>
                            <th scope="col">Nomor Divisi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($kegiatan as $k)
                            <tr>
                                <td>{{$k->noKegiatan}}</td>
                                <td>{{$k->judulKegiatan}}</td>
                                <td>{{$k->jenisKegiatan}}</td>
                                <td>{{$k->jadwalKegiatan}}</td>
                                <td>{{$k->tuk}}</td>
                                <td>{{$k->divisi_id}}</td>
                                <td><a href="/kegiatan/edit/{{$k->noKegiatan}}">Update</a></td>
                                <td><a href="/kegiatan/delete/{{$k->noKegiatan}}">Hapus</a></td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>

                      <a href="/kegiatan/add" class="btn btn-primary">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

