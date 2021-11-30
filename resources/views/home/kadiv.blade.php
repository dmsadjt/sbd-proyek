@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Kepala Divisi</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="text-center">Hai, apa yang ingin kamu lakukan?</p>
                    <hr>
                    <div class="d-flex">
                        <div class="col-3 p-2 text-center border bg-light align-self-center">
                            <h3>Jumlah Anggota PKMBK</h3>
                            <h1>{{$member_count}}</h1>
                            <h4>Anggota</h4>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-3 p-2 text-center border bg-light align-self-center">
                            <h3>Kegiatan PKMBK</h3>
                            <h1>{{$event_count}}</h1>
                            <h4 class="align-bottom">Kegiatan</h4>
                        </div>
                        <div class="col-1"></div>
                        <div class="col">
                            <table class="table table-bordered table-responsive-md ">
                                <thead>
                                  <tr>
                                    <th scope="col">Nomor Divisi</th>
                                    <th scope="col">Jumlah Anggota</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($member_divisi as $a)
                                    <tr>
                                        <td>{{$a->divisi_id}}</td>
                                        <td>{{$a->jumlah_anggota}}</td>
                                      </tr>
                                    @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                    <hr>
                        <div class="row">
                            <div class="col-4">

                                <table class="table table-bordered">
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
                                          </tr>
                                        @endforeach
                                    </tbody>
                                  </table>

                            </div>

                            <div class="col">
                                <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">Nomor Kegiatan</th>
                                        <th scope="col">Judul Kegiatan</th>
                                        <th scope="col">Jadwal Kegiatan</th>
                                        <th scope="col">Nomor Divisi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kegiatan as $k)
                                        <tr>
                                            <td>{{$k->noKegiatan}}</td>
                                            <td>{{$k->judulKegiatan}}</td>
                                            <td>{{$k->jadwalKegiatan}}</td>
                                            <td>{{$k->divisi_id}}</td>
                                          </tr>
                                        @endforeach
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table table-bordered table-responsive-md anggota">
                                <thead>
                                  <tr>
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
                                        <td>{{$a->namaDepan}}</td>
                                        <td>{{$a->namaBelakang}}</td>
                                        <td>{{$a->namaPanggilan}}</td>
                                        <td>{{$a->asalJurusan}}</td>
                                        <td>{{$a->ttl}}</td>
                                        <td>{{$a->alamat}}</td>
                                        <td>{{$a->noHP}}</td>
                                        <td>{{$a->divisi_id}}</td>
                                      </tr>
                                    @endforeach
                                </tbody>
                              </table>
                        </div>

                        <div class="row">
                            <table class="table">
                                <thead>
                                  <tr>
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
                                        <td>{{$j->divisi_id}}</td>
                                        <td>{{$j->senin}}</td>
                                        <td>{{$j->selasa}}</td>
                                        <td>{{$j->rabu}}</td>
                                        <td>{{$j->kamis}}</td>
                                        <td>{{$j->jumat}}</td>
                                        <td>{{$j->sabtu}}</td>
                                        <td>{{$j->minggu}}</td>
                                      </tr>
                                    @endforeach
                                </tbody>
                              </table>
                        </div>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-primary m-2" href="/anggota/index">
                            Anggota
                        </a>
                        <a class="btn btn-primary m-2" href="/kegiatan/index">
                            Proker dan Agenda
                        </a>
                        <a class="btn btn-primary m-2" href="/jadwal/index">
                            Jadwal Kesibukan
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
