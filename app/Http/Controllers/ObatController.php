<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Kategori;
use App\Models\Obat;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObatController extends Controller
{
    
    public function landingpage()
    {
        
        $obat = DB::table('join_obat')
        // ->join('kategori', 'obat.id_kategori', '=', 'kategori.id_kategori')
        // ->join('jenis_obat', 'obat.id_jenis', '=', 'jenis_obat.id_jenis')
        // ->join('suplier', 'obat.id_suplier', '=', 'suplier.id_suplier')
        ->get();
        return view('landingpage', compact('obat'));

    }

    public function index(Request $request)
    {
        
        if($request->has('search')){
            $obat = DB::table('join_obat')->where('nama_obat','LIKE','%'.$request->search.'%')->get();
 
        } else {
            $obat = DB::table('join_obat')->get();
        }

       
        return view('admin.admin_daftarsemuaobat', compact('obat'));
        
    }

 
    public function create()
    {
        
        $kat = Kategori::all();
        $sup = Supplier::all();
        $jns = Jenis::all();


        return view('admin.admin_tambahobat', compact('kat','sup' ,'jns'));

    }

    public function store(Request $request)
    {
        
      $id_obat = DB::table('obat')->max('id_obat')+1;


       DB::table('obat')->insert ([
            'id_obat'=> $id_obat,
            'nama_obat' => $request->nama_obat,
        ]);

       

        if(request()->hasFile(key: 'image')){
            $image = request()->file(key: 'image')->getClientOriginalName();
            request()->file(key: 'image')->storeAs('/obat', $image, options:'');
            DB::table('detail_obat')->insert ([
            'id_obat'=> $id_obat,
            'id_kategori'=> $request->id_kategori,
            'id_jenis' => $request->id_jenis,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'tgl_expired' => $request->tgl_expired,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
            'penyimpanan' => $request->penyimpanan,
            'id_suplier' => $request->id_suplier,
            'image' =>$image,
            ]);
        return redirect('admin/semuaobat')->withSuccess('Data Berhasil Ditambahkan');
    }  else{
            return back()->with('danger','Gagal');
        }
}

  
    public function habis()
    {

        $obat = DB::table('join_obat')
        ->where('stok' , '0')
        ->get();

        $obathampirhabis = DB::table('obat_hampir_habis')->get();
    

        return view ('admin.admin_daftarobathabis' , compact('obat','obathampirhabis'));
    }

   
    public function edit($id)
    {
        
        $editobat = DB::table('join_obat')
        // ->join('kategori', 'obat.id_kategori', '=', 'kategori.id_kategori')
        // ->join('jenis_obat', 'obat.id_jenis', '=', 'jenis_obat.id_jenis')
        // ->join('suplier', 'obat.id_suplier', '=', 'suplier.id_suplier')
        // ->select('obat.*', 'kategori.nama_kategori')
        // ->select('obat.*', 'jenis_obat.jenis')
        // ->select('obat.*', 'suplier.nama_sup')
        ->where('id_obat', $id)
        ->first();


        $kat = Kategori::all();
        $sup = Supplier::all();
        $jns = Jenis::all();

        return view ('admin.admin_editobat' , compact('editobat','kat','sup','jns') );
    }

    
    public function update(Request $request, $id)
    {

        DB::table('obat')->where('id_obat', $id)->update
        ([
            'nama_obat'=> $request->nama_obat,
        ]);

        if(request()->hasFile(key: 'image')){
            $image = request()->file(key: 'image')->getClientOriginalName();
            request()->file(key: 'image')->storeAs('/obat', $image, options:'');
            DB::table('detail_obat')->update 
            ([
                'image' =>$image,
                'id_kategori'=> $request->id_kategori,
                'id_jenis' => $request->id_jenis,
                'harga_beli' => $request->harga_beli,
                'harga_jual' => $request->harga_jual,
                'tgl_expired' => $request->tgl_expired,
                'deskripsi' => $request->deskripsi,
                'stok' => $request->stok,
                'penyimpanan' => $request->penyimpanan,
                'id_suplier' => $request->id_suplier,
                
            ]);
        return redirect('admin/semuaobat')->withSuccess('Data Berhasil DiEdit');
    }  else {
        DB::table('detail_obat')->update 
        ([
            'id_kategori'=> $request->id_kategori,
            'id_jenis' => $request->id_jenis,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'tgl_expired' => $request->tgl_expired,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
            'penyimpanan' => $request->penyimpanan,
            'id_suplier' => $request->id_suplier,
        ]);
        return redirect('admin/semuaobat')->withSuccess('Data Berhasil DiEdit');
    }
}

    
    public function destroy($id)
    {
        $obat = Obat:: findorfail($id);
        $obat->delete();
        return back();
    }

    public function exp()
    {
        $exp = DB::table('obat_exp')
        // ->join('kategori', 'obat_exp.id_kategori', '=', 'kategori.id_kategori')
        // ->join('jenis_obat', 'obat_exp.id_jenis', '=', 'jenis_obat.id_jenis')
        // ->join('suplier', 'obat_exp.id_suplier', '=', 'suplier.id_suplier')
        ->get();
        // dd($exp);

        $hampirexp =  DB::table('obat_hampir_exp')
        // ->join('kategori', 'obat_hampir_exp.id_kategori', '=', 'kategori.id_kategori')
        // ->join('jenis_obat', 'obat_hampir_exp.id_jenis', '=', 'jenis_obat.id_jenis')
        // ->join('suplier', 'obat_hampir_exp.id_suplier', '=', 'suplier.id_suplier')
        ->get();
        return view("admin.admin_daftarobatkadaluarsa", compact('exp','hampirexp'));
    }

}



