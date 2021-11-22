<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatan = DB::table('kegiatans')->get();
        return view('kegiatan.index', ['kegiatan' => $kegiatan]);
    }
    public function addNew()
    {
        return view('kegiatan.add');
    }
    public function store()
    {
        $data = request()->validate([
            'noKegiatan' => 'required',
            'judulKegiatan' => 'required',
            'jenisKegiatan' => 'required',
            'jadwalKegiatan' => 'required',
            'tuk' => 'required',
            'divisi_id' => 'required',
        ]);

        if (auth()->user()) {
            DB::table('kegiatans')->insert($data);
            return redirect('kegiatan/index');
        } else return redirect('/login');
    }

    public function edit($noKegiatan)
    {
        $kegiatan = DB::table('kegiatans')->where('noKegiatan', $noKegiatan)->first();
        return view('kegiatan.edit', ['kegiatan' => $kegiatan]);
    }

    public function update(Request $request)
    {
        if (auth()->user()) {
            DB::table('kegiatans')->where('noKegiatan', $request->noKegiatan)->update([
                'judulKegiatan' => $request->judulKegiatan,
                'jenisKegiatan' => $request->jenisKegiatan,
                'jadwalKegiatan' => $request->jadwalKegiatan,
                'tuk' => $request->tuk,
                'divisi_id' => $request->divisi_id,
            ]);

            return redirect('/kegiatan/index');
        } else return redirect('/login');
    }

    public function delete($noKegiatan)
    {
        if (auth()->user()) {
            DB::table('kegiatans')->where('noKegiatan', $noKegiatan)->delete();
            return redirect('kegiatan/index');
        } else return redirect('/login');
    }
}
