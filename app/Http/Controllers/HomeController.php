<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Obat;

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
    public function index2()
    {
        $countuser = DB::select("CALL jumlahuser()");
        $count = $countuser[0];

        $countobat = DB::select("CALL jumlahobat()");
        $countob = $countobat[0];

        $countsuplier = DB::select("CALL jumlahsupplier()");
        $countsup = $countsuplier[0];

        $countkategori = DB::select("CALL jumlahkategori()");
        $countkat = $countkategori[0];

        $countjenis = DB::select("CALL jumlahjenis()");
        $countjen = $countjenis[0];

        return view('admin.admin_dashboard',compact('count','countob','countsup','countkat','countjen'));
    }

    public function index()
    {
        $obat = DB::table('join_obat')->get();
        return view('member.semua.semuaobat', compact('obat'));
    }
}
