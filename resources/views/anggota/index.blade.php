@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card" style="width:100%">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/home">Kembali ke Dashboard</a>

                    <input id="myInput" type="text" placeholder="Search.." class="form-control">

                    <script>
                        $(document).ready(function () {
                            $("#myInput").on("keyup", function () {
                                var value = $(this).val().toLowerCase();
                                $("#myTable tr").filter(function () {
                                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                });
                            });
                        });
                    </script>

                    <table class="table table-hover table-responsive" id="myTable">
                        <thead>
                          <tr>
                            <th scope="col">NRP</th>
                            <th scope="col">Nama Depan</th>
                            <th scope="col">Nama Belakang</th>
                            <th scope="col">Nama Panggilan</th>
                            <th scope="col">Asal Jurusan</th>
                            <th scope="col">Tempat, Tanggal Lahir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Nomor HP</th>
                            <th scope="col">Nomor Divisi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($anggota as $a)
                            <tr>
                                <td>{{$a->NRP}}</td>
                                <td>{{$a->namaDepan}}</td>
                                <td>{{$a->namaBelakang}}</td>
                                <td>{{$a->namaPanggilan}}</td>
                                <td>{{$a->asalJurusan}}</td>
                                <td>{{$a->ttl}}</td>
                                <td>{{$a->alamat}}</td>
                                <td>{{$a->noHP}}</td>
                                <td>{{$a->divisi_id}}</td>
                                <td><a href="/anggota/edit/{{$a->NRP}}">Update</a></td>
                                <td><a href="/anggota/delete/{{$a->NRP}}">Hapus</a></td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>

                      <a href="/anggota/add" class="btn btn-primary">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
