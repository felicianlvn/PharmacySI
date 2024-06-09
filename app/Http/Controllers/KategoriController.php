<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.admin_kategoriobat', compact('kategori'));
    }

    
    public function create()
    {
        return view('admin.admin_tambahkategoriobat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kategori::create ([
            'nama_kategori'=> $request->nama_kategori,
            'des' => $request->des,
        ]);

        return redirect('admin/kategori')->withSuccess('Data Berhasil Ditambahkan');
    }

    
    public function edit($id)
    {
        $editkategori = Kategori:: findorfail($id);
        return view ('admin.admin_editkategoriobat' , compact('editkategori') );
    }

    
    public function update(Request $request, $id)
    {
        $editkategori = Kategori:: findorfail($id);
        $editkategori->update($request->all());
        
        return redirect('admin/kategori')->withSuccess('Data Berhasil DiEdit');
    }

    
    public function destroy($id)
    {
        $kategori = Kategori:: findorfail($id);
        $kategori->delete();
        return back();
    }
}
