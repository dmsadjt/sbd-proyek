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
            'noDivisi' => 'required',
            'namaDivisi' => 'required',
            'kepalaDivisi' => 'required'
        ]);

        if (auth()->user()) {
            DB::table('divisis')->insert($data);
            return redirect('divisi/index');
        } else return redirect('/login');
    }

    public function edit($noDivisi)
    {
        $divisi = DB::table('divisis')->where('noDivisi', $noDivisi)->first();
        return view('divisi.edit', ['divisi' => $divisi]);
    }

    public function update(Request $request)
    {
        if (auth()->user()) {
            DB::table('divisis')->where('noDivisi', $request->noDivisi)->update([
                'noDivisi' => $request->noDivisi,
                'namaDivisi' => $request->namaDivisi,
                'kepalaDivisi' => $request->kepalaDivisi,
            ]);

            return redirect('/divisi/index');
        } else return redirect('/login');
    }

    public function delete($noDivisi)
    {
        if (auth()->user()) {
            DB::table('divisis')->where('noDivisi', $noDivisi)->delete();
            return redirect('divisi/index');
        }
        else return redirect('/login');
    }
}
