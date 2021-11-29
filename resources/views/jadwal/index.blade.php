
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Jadwal</div>

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

                    <table class="table" id="myTable">
                        <thead>
                          <tr>
                            <th scope="col">Nomor Jadwal</th>
                            <th scope="col">Nomor Divisi</th>
                            <th scope="col">Senin</th>
                            <th scope="col">Selasa</th>
                            <th scope="col">Rabu</th>
                            <th scope="col">Kamis</th>
                            <th scope="col">Jumat</th>
                            <th scope="col">Sabtu</th>
                            <th scope="col">Minggu</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($jadwal as $j)
                            <tr>
                                <td>{{$j->noJadwal}}</td>
                                <td>{{$j->divisi_id}}</td>
                                <td>{{$j->senin}}</td>
                                <td>{{$j->selasa}}</td>
                                <td>{{$j->rabu}}</td>
                                <td>{{$j->kamis}}</td>
                                <td>{{$j->jumat}}</td>
                                <td>{{$j->sabtu}}</td>
                                <td>{{$j->minggu}}</td>
                                <td><a href="/jadwal/edit/{{$j->noJadwal}}">Update</a></td>
                                <td><a href="/jadwal/delete/{{$j->noJadwal}}">Hapus</a></td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>

                      <a href="/jadwal/add" class="btn btn-primary">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

