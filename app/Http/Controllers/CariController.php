<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CariController extends Controller
{
    public function index(Request $request){
        $purchase = DB::table('purchase')->where('tgl_beli', '>=',$request->tgl_awal )->where('tgl_beli', '<=', $request->tgl_akhir)->get()->toArray();
        $detail = DB::table('detail_purchase')->join('obat', 'detail_purchase.id_obat', '=', 'obat.id_obat')->get()->toArray();
        foreach($purchase as $data){
            $data->detail = array_filter($detail, function($detail) use ($data) {
                return $detail->id_pembelian === $data->id_pembelian;
            });
        }

        // dd($purchase);
        
        return view('admin.tampil', compact('purchase'));
    }
    public function tampil(){
        return view('admin.admin_caripenjualan');
    }
}
