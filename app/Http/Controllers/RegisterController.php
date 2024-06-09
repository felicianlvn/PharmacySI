<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    
    public function index()
    {
        $provinces = Province::all();
        return view('auth.register1',compact('provinces'));
    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $id_user = DB::table('users')->max('user_id')+1;

        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
           ]);

       User::create ([
            'user_id'=> $id_user,
            'name'=> $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if(request()->hasFile(key: 'image')){
            $image = request()->file(key: 'image')->getClientOriginalName();
            request()->file(key: 'image')->storeAs('/user', $image, options:'');
            DB::table('detail_user')->insert ([
                'id_user'=> $id_user,
                'id_province' => $request->id_province,
                'id_regencies' => $request->id_regencies,
                'id_districts' => $request->id_districts,
                'id_villages' => $request->id_villages,
                'alamat' => $request->alamat,
                'telp' => $request->telp,
                'tmpt_lahir' => $request->tmpt_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'pekerjaan' => $request->pekerjaan,
                'image' =>$image,
            ]);
            return redirect('/login')->with ('success','Registrasi Berhasil Silahkan Login !!!');
        }  else{
            return back()->with('danger','Gagal');
        }   
    }
    

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }


    public function getkabupaten(request $request){
        $id_provinsi = $request->id_provinsi;

        $kabupatens = Regency::where('province_id', $id_provinsi)->get();

        $option = "<option>Pilih Kabupaten...</option>";
        foreach($kabupatens as $kabupaten){
            $option .= "<option value='$kabupaten->id'>$kabupaten->name</option>";
        }

        echo $option;
    }

    public function getkecamatan(request $request){
        $id_kabupaten = $request->id_kabupaten;

        $kecamatans = District::where('regency_id', $id_kabupaten)->get();

        $option = "<option>Pilih Kecamatan...</option>";
        foreach($kecamatans as $kecamatan){
            $option.= "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }

        echo $option;
    }

    public function getdesa(request $request){
        $id_kecamatan = $request->id_kecamatan;

        $desas = Village::where('district_id', $id_kecamatan)->get();

        $option = "<option>Pilih Desa...</option>";
        foreach($desas as $desa){
            $option.= "<option value='$desa->id'>$desa->name</option>";
        }
        echo $option;
    }

}
