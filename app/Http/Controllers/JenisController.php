<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{

    public function index()
    {
        $jenis = Jenis::all();
        return view('admin.admin_jenisobat', compact('jenis'));
    }

   
    public function create()
    {
        return view('admin.admin_tambahjenisobat');
    }

    public function store(Request $request)
    {
        Jenis::create ([
            'jenis'=> $request->jenis,
        ]);

        return redirect('admin/jenis')->withSuccess('Data Berhasil Ditambahkan');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $editjenis = Jenis:: findorfail($id);
        return view ('admin.admin_editjenisobat' , compact('editjenis'));
    }

    
    public function update(Request $request, $id)
    { 
        $editjenis = Jenis:: findorfail($id);
        $editjenis->update($request->all());
        
        return redirect('admin/jenis')->withSuccess('Data Berhasil DiEdit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenis = Jenis::findorfail($id);
        $jenis->delete();
        return back();
    }
}
