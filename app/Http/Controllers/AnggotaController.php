<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = DB::table('anggotas')->get();
        return view('anggota.index', ['anggota' => $anggota]);
    }
    public function addNew()
    {
        return view('anggota.add');
    }
    public function store()
    {
        $data = request()->validate([
            'NRP' => 'required',
            'namaDepan' => 'required',
            'namaBelakang' => 'required',
            'namaPanggilan' => 'required',
            'asalJurusan' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'noHP' => 'required',
            'divisi_id' => 'required',

        ]);

        if (auth()->user()) {
            DB::table('anggotas')->insert($data);
            return redirect('anggota/index');
        } else return redirect('/login');
    }

    public function edit($NRP)
    {
        $anggota = DB::table('anggotas')->where('NRP', $NRP)->first();
        return view('anggota.edit', ['anggota' => $anggota]);
    }

    public function update(Request $request)
    {
        if (auth()->user()) {
            DB::table('anggotas')->where('NRP', $request->NRP)->update([
                'namaDepan' => $request->namaDepan,
                'namaBelakang' => $request->namaBelakang,
                'namaPanggilan' => $request->namaPanggilan,
                'asalJurusan' => $request->asalJurusan,
                'ttl' => $request->ttl,
                'alamat' => $request->alamat,
                'noHP' => $request->noHP,
                'divisi_id' => $request->divisi_id,
            ]);

            return redirect('/anggota/index');
        } else return redirect('/login');
    }

    public function delete($NRP)
    {
        if (auth()->user()) {
            DB::table('anggotas')->where('NRP', $NRP)->delete();
            return redirect('anggota/index');
        } else return redirect('/login');
    }
}
