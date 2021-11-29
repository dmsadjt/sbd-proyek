@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Divisi</div>

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
                            <th scope="col">noDivisi</th>
                            <th scope="col">namaDivisi</th>
                            <th scope="col">kepalaDivisi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($divisi as $d)
                            <tr>
                                <td>{{$d->noDivisi}}</td>
                                <td>{{$d->namaDivisi}}</td>
                                <td>{{$d->kepalaDivisi}}</td>
                                <td><a href="/divisi/edit/{{$d->noDivisi}}">Update</a></td>
                                <td><a href="/divisi/delete/{{$d->noDivisi}}">Hapus</a></td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>

                      <a href="/divisi/add" class="btn btn-primary">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
