<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Obat;
use Auth;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class PenjualanController extends Controller
{
   
    public function index()
    {
        $penjualan = DB::table('join_purcase')->get();
        return view('admin.admin_penjualan',compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $obat1 = DB::table('join_obat')->get();
        $obat = DB::table('join_obat')->get();

        return view('admin.admin_tambahpenjualan', compact('obat'));
    }

    public function coba(Request $request)
    {

        $count = DB::table('purchase')->count();
        $id = $count + 1;
        $randomNumber = Str::random(10);


        DB::table('purchase')->insert([
            'id_pembelian' => $id,
            'tgl_beli' => $request->tgl_beli,
            'no_ref' => $randomNumber,
            'user_id' => Auth::id(),
            'grandtotal' => $request->grandtotal,
            'nama_pembeli' => $request->nama_pembeli
        ]);
        for ($i=0; $i < count($request->nama_obat)  ; $i++) { 
            $data = DB::table('join_obat')->select('harga_beli')->where('id_obat', '=', $request->nama_obat[$i])->first();
            // dd();
            DB::table('detail_purchase')->insert([
                'id_pembelian' => $id,
                'id_obat' => $request->nama_obat[$i],
                'banyak' => $request->banyak[$i],
                'harga_jual'=> $data->harga_beli ,

                'subtotal' => $request->subtotal[$i]
            ]);
        };
        return redirect()->route('print', ['id' => $id]);
    }
    public function print($id){
        $purchase = DB::table('purchase')->where('id_pembelian', '=', $id)->get()->toArray();
        $detail = DB::table('detail_purchase')->join('obat', 'detail_purchase.id_obat', '=', 'obat.id_obat')->get()->toArray();
        foreach($purchase as $data){
            $data->detail = array_filter($detail, function($detail) use ($data) {
                return $detail->id_pembelian === $data->id_pembelian;
            });
        }
        return view('admin.invoice', compact('purchase'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function oke($id_obat)
    {
        $data =DB::table('join_obat')->where('id_obat',$id_obat)->first();
        
        return response()->json([
            'data'=>$data
        ]);
    }
}
