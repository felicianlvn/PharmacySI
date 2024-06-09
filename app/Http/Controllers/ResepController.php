<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ResepController extends Controller
{
    public function index()
    {
        return view('member.resep.unggah');
    }


    public function show()
    {
        $resep = DB::table('resep')
        ->where('user_id', Auth::user()->user_id)
        ->where('status','ongoing')
        ->get();

        $resep2 = DB::table('resep')
        ->where('user_id', Auth::user()->user_id)
        ->where('status','harga masuk')
        ->get();

        $resep3 = DB::table('resep')
        ->where('user_id', Auth::user()->user_id)
        ->where('status','blocked')
        ->get();

        return view('member.resep.resepsaya' , compact('resep','resep2','resep3'));
    }

    
    public function store(Request $request)
    {
        if(request()->hasFile(key: 'image')){
            $image = request()->file(key: 'image')->getClientOriginalName();
            request()->file(key: 'image')->storeAs('/resep', $image, options:'');
            DB::table('resep')->insert(
                [
                    'user_id' => Auth::user()->user_id,
                    'keterangan' => $request->keterangan,
                    'image' => $image,
                    'status' => "ongoing",
                    'created_at' => now(),
                ]
            );
            return back()->with ('success','Berhasil Dikirimkan ');
        }
        else{
            return back()->with('danger','Gagal');
        }
    }

   
    public function adminresep()
    {
         $data = DB::table('join_resep')
        ->join('users', 'join_resep.user_id', '=', 'users.user_id')
        // ->join('join_user', 'resep.user_id', '=', 'join_user.user_id')
        ->where('status' , 'ongoing')->get();

        $data2 = DB::table('join_resep')
        ->join('users', 'join_resep.user_id', '=', 'users.user_id')
        // ->join('join_user', 'resep.user_id', '=', 'join_user.user_id')
        ->where('status' , 'allowed')->get();

        $data3 = DB::table('join_resep')
        ->join('users', 'join_resep.user_id', '=', 'users.user_id')
        // ->join('join_user', 'resep.user_id', '=', 'join_user.user_id')
        ->where('status' , 'harga masuk')->get();

        $prov = DB::table('prov')
        ->where('status' , 'ongoing')->get();

        // $prov = DB::table('prov')->where('user_id');
        // $regencies = DB::table('join_user')->join('regencies', 'join_user.id_regencies', '=', 'regencies.id')->where('user_id' , Auth::User()->user_id)->first();
        // $district = DB::table('join_user')->join('districts', 'join_user.id_districts', '=', 'districts.id')->where('user_id' , Auth::User()->user_id)->first();
        // $village = DB::table('join_user')->join('villages', 'join_user.id_villages', '=', 'villages.id')->where('user_id' , Auth::User()->user_id)->first();
        return view('admin.admin_kelolaresep', compact('data','prov','data2','data3'));
    }

   
    public function block($id_resep)
    {
        $status = DB::table('resep')->where('id_resep', $id_resep);
        $status->update(['status' => "blocked"]);
        return redirect('adminresep');

    }

    public function allow($id_resep)
    {
        $status = DB::table('resep')->where('id_resep', $id_resep);
        $status->update(['status' => "allowed"]);
        return back()->with('success', 'Resep DiIzinkan');

    }

    public function harga($id_resep, Request $request)
    {
        $status = DB::table('resep')->where('id_resep', $id_resep);
        // $status -> insert([
        //     'catatan_admin'=>$request->catatan_admin,
        // ]);
        $status->update([
            'catatan_admin' => $request->catatan_admin,
            'status'=> "harga masuk"
        ]);
        return back()->with('success', 'Resep Masuk Harga');

    }
}
