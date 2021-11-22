<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = DB::table('jadwals')->get();
        return view('jadwal.index', ['jadwal' => $jadwal]);
    }
    public function addNew()
    {
        return view('jadwal.add');
    }
    public function store()
    {
        $data = request()->validate([
            'noJadwal' => 'required',
            'divisi_id' => 'required',
            'senin' => 'required',
            'selasa' => 'required',
            'rabu' => 'required',
            'kamis' => 'required',
            'jumat' => 'required',
            'sabtu' => 'required',
            'minggu' => 'required',
        ]);

        if (auth()->user()) {
            DB::table('jadwals')->insert($data);
            return redirect('jadwal/index');
        } else return redirect('/login');
    }

    public function edit($noJadwal)
    {
        $jadwal = DB::table('jadwals')->where('noJadwal', $noJadwal)->first();
        return view('jadwal.edit', ['jadwal' => $jadwal]);
    }

    public function update(Request $request)
    {
        if (auth()->user()) {
            DB::table('jadwals')->where('noJadwal', $request->noJadwal)->update([
                'divisi_id' => $request->divisi_id,
                'senin' => $request->senin,
                'selasa' => $request->selasa,
                'rabu' => $request->rabu,
                'kamis' => $request->kamis,
                'jumat' => $request->jumat,
                'sabtu' => $request->sabtu,
                'minggu' => $request->minggu,
            ]);

            return redirect('/jadwal/index');
        } else return redirect('/login');
    }

    public function delete($noJadwal)
    {
        if (auth()->user()) {
            DB::table('jadwals')->where('noJadwal', $noJadwal)->delete();
            return redirect('jadwal/index');
        } else return redirect('/login');
    }
}
