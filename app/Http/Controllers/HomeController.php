<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use SebastianBergmann\Diff\Diff;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $divisi = DB::table('divisis')->get();
        $kegiatan = DB::table('kegiatans')->get();
        $anggota = DB::table('anggotas')->get();
        $jadwal = DB::table('jadwals')->get();
        $member_count = DB::table('anggotas')->count();
        $event_count = DB::table('kegiatans')->count();
        $member_divisi = DB::table('anggotas')
            ->select('divisi_id', DB::raw('count(*) as jumlah_anggota'))
            ->groupBy('divisi_id')
            ->get();

        if (Auth::check() && Auth::user()->id == 3) {

            return view('home.anggota', [
                'divisi' => $divisi,
                'kegiatan' => $kegiatan,
                'anggota' => $anggota,
                'jadwal' => $jadwal,
                'member_count' => $member_count,
                'event_count' => $event_count,
                'member_divisi' => $member_divisi,
            ]);

        } elseif (Auth::check() && Auth::user()->id == 2) {

            return view('home.kadiv', [
                'divisi' => $divisi,
                'kegiatan' => $kegiatan,
                'anggota' => $anggota,
                'jadwal' => $jadwal,
                'member_count' => $member_count,
                'event_count' => $event_count,
                'member_divisi' => $member_divisi,
            ]);

        } else {
            return view('home.ksb', [
                'divisi' => $divisi,
                'kegiatan' => $kegiatan,
                'anggota' => $anggota,
                'jadwal' => $jadwal,
                'member_count' => $member_count,
                'event_count' => $event_count,
                'member_divisi' => $member_divisi,
            ]);
        }
    }

    public function ksb()
    {
        $divisi = DB::table('divisis')->get();
        $kegiatan = DB::table('kegiatans')->get();
        $anggota = DB::table('anggotas')->get();
        $jadwal = DB::table('jadwals')->get();
        $member_count = DB::table('anggotas')->count();
        $event_count = DB::table('kegiatans')->count();
        $member_divisi = DB::table('anggotas')
            ->select('divisi_id', DB::raw('count(*) as jumlah_anggota'))
            ->groupBy('divisi_id')
            ->get();


        return view('home.ksb', [
            'divisi' => $divisi,
            'kegiatan' => $kegiatan,
            'anggota' => $anggota,
            'jadwal' => $jadwal,
            'member_count' => $member_count,
            'event_count' => $event_count,
            'member_divisi' => $member_divisi,
        ]);
    }
    public function kadiv()
    {
        $divisi = DB::table('divisis')->get();
        $kegiatan = DB::table('kegiatans')->get();
        $anggota = DB::table('anggotas')->get();
        $jadwal = DB::table('jadwals')->get();
        $member_count = DB::table('anggotas')->count();
        $event_count = DB::table('kegiatans')->count();
        $member_divisi = DB::table('anggotas')
            ->select('divisi_id', DB::raw('count(*) as jumlah_anggota'))
            ->groupBy('divisi_id')
            ->get();

        return view('home.kadiv', [
            'divisi' => $divisi,
            'kegiatan' => $kegiatan,
            'anggota' => $anggota,
            'jadwal' => $jadwal,
            'member_count' => $member_count,
            'event_count' => $event_count,
            'member_divisi' => $member_divisi,
        ]);
    }
    public function anggota()
    {
        $divisi = DB::table('divisis')->get();
        $kegiatan = DB::table('kegiatans')->get();
        $anggota = DB::table('anggotas')->get();
        $jadwal = DB::table('jadwals')->get();
        $member_count = DB::table('anggotas')->count();
        $event_count = DB::table('kegiatans')->count();
        $member_divisi = DB::table('anggotas')
            ->select('divisi_id', DB::raw('count(*) as jumlah_anggota'))
            ->groupBy('divisi_id')
            ->get();

        return view('home.anggota', [
            'divisi' => $divisi,
            'kegiatan' => $kegiatan,
            'anggota' => $anggota,
            'jadwal' => $jadwal,
            'member_count' => $member_count,
            'event_count' => $event_count,
            'member_divisi' => $member_divisi,
        ]);
    }
}
