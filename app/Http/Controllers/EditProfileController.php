<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class EditProfileController extends Controller
{
    public function editprofile()
    {
        $user = DB::table('join_user')->where('user_id', Auth::user()->user_id)->first();
        $provinces = Province::all();
        $prov = DB::table('join_user')->join('provinces', 'join_user.id_province', '=', 'provinces.id')->where('user_id' , Auth::User()->user_id)->first();
        $regencies = DB::table('join_user')->join('regencies', 'join_user.id_regencies', '=', 'regencies.id')->where('user_id' , Auth::User()->user_id)->first();
        $district = DB::table('join_user')->join('districts', 'join_user.id_districts', '=', 'districts.id')->where('user_id' , Auth::User()->user_id)->first();
        $village = DB::table('join_user')->join('villages', 'join_user.id_villages', '=', 'villages.id')->where('user_id' , Auth::User()->user_id)->first();
        // dd($prov);
        return view('member.editprofile',compact('user','provinces','prov','regencies','district','village'));
    }



    public function update(Request $request)
    {
        
        DB::table('users')->where('user_id', Auth::user()->user_id)->update
        ([
            'name'=> $request->name,
            // 'password' => Hash::make($request->password),
        ]);

        if(request()->hasFile(key: 'image')){
            $image = request()->file(key: 'image')->getClientOriginalName();
            request()->file(key: 'image')->storeAs('/user', $image, options:'');
            DB::table('detail_user')->where('id_user', Auth::user()->user_id)->update ([
                'id_province' => $request->id_province,
                'id_regencies' => $request->id_regencies,
                'id_districts' => $request->id_districts,
                'id_villages' => $request->id_villages,
                'alamat' => $request->alamat,
                'telp' => $request->telp,
                'pekerjaan' => $request->pekerjaan,
                'image' =>$image,
            ]);
            return redirect('/profile')->with ('success','Profile Berhasil Diupdate');
        }  else{
            DB::table('detail_user')->update ([
                'id_province' => $request->id_province,
                'id_regencies' => $request->id_regencies,
                'id_districts' => $request->id_districts,
                'id_villages' => $request->id_villages,
                'alamat' => $request->alamat,
                'telp' => $request->telp,
                // 'tmpt_lahir' => $request->tmpt_lahir,
                // 'tgl_lahir' => $request->tgl_lahir,
                // 'jenis_kelamin' => $request->jenis_kelamin,
                'pekerjaan' => $request->pekerjaan,
            ]);
            return redirect('/profile')->with ('success','Profile Berhasil Diupdate');
        }

        
        auth()->user()->update([
            'name'=> $request->name,
        ]);

        return back()->with('message','Your Profile Has Been Update');
        
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
