<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view('admin.admin_supplier' ,compact('supplier') );
    }

   
    public function create()
    {
        return view('admin.admin_tambahsupplier');
    }


    public function store(Request $request)
    {
        Supplier::create ([
            'nama_sup'=> $request->nama_sup,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
        ]);

        return redirect('admin/supplier')->withSuccess('Supplier Berhasil Ditambahkan');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $editsupplier = Supplier:: findorfail($id);
        return view ('admin.admin_editsupplier' , compact('editsupplier') );
    }

    
    public function update(Request $request, $id)
    {
        $editsupplier = Supplier:: findorfail($id);
        $editsupplier->update($request->all());
        
        return redirect('admin/supplier')->withSuccess('Supplier Berhasil DiEdit');


    }

   
    public function destroy($id)
    {
        $supplier = Supplier:: findorfail($id);
        $supplier->delete();
        return back();
    }
}
