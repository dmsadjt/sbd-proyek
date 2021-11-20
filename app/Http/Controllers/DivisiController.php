<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index()
    {
        $divisi = DB::table('divisis')->get();
        return view('divisi.index', ['divisi' => $divisi]);
    }
    public function addNew()
    {
        return view('divisi.add');
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

    public function edit($id)
    {
        $divisi = DB::table('divisis')->where('id', $id)->first();
        return view('divisi.edit', ['divisi' => $divisi]);
    }

    public function update(Request $request)
    {
        if (auth()->user()) {
            DB::table('divisis')->where('id', $request->id)->update([
                'noDivisi' => $request->noDivisi,
                'namaDivisi' => $request->namaDivisi,
                'kepalaDivisi' => $request->kepalaDivisi,
            ]);

            return redirect('/divisi/index');
        } else return redirect('/login');
    }

    public function delete($id)
    {
        if (auth()->user()) {
            DB::table('divisis')->where('id', $id)->delete();
            return redirect('divisi/index');
        }
        else return redirect('/login');
    }
}
