<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CartController extends Controller
{
   
    public function index()
    {
        $keranjang = DB::table('join_cart')->where('user_id', Auth::user()->user_id)->get();

        $total = DB::table('cart')
        ->where('user_id', Auth::user()->user_id)
        // ->where('aksi','keranjang')
        ->sum('total');

        return view('member.keranjang.belanjaan',compact('keranjang','total'));
    }

    public function store(Request $request)
    {
    $id_obat = $request->input('id_obat');

    // cek apakah produk sudah ada di keranjang
    $item = DB::table('cart')->where('id_obat', $id_obat)->first();
    $ambilstok = DB::table('detail_obat')->where('id_obat', $id_obat)->first();
    $cekstok = $ambilstok->stok;

    
    if ($item) {
        //jika sudah, tambahkan jumlah produk
        $itemcart  = DB::table('cart')->where('id_obat',$id_obat)->first();
        if($cekstok >= $itemcart->quantity+1 ){
        DB::table('cart')
            ->where('id_obat', $id_obat)
            ->update(['quantity' => $item->quantity + 1]);
        } else { 
            dd('error stock');
         }
    } else {
        
        $product =DB::table('join_obat')->where('id_obat',$id_obat)->first();
       
         DB::table('cart')->insert([
            'id_obat' => $request->id_obat,
            'price' => $product->harga_jual,
            'quantity' => 1,
            'user_id' => Auth::user()->user_id,
            // 'aksi' => "keranjang",
            
        ]);

        return back()->with ('success','Berhasil DiTambahkan ke Keranjang ');
        
    }
    return back()->with ('success','Berhasil DiTambahkan ke Keranjang ');

        
    }


    public function checkout()
    {
        // $checkout = DB::table('cart')->where('user_id', Auth::user()->user_id);
        // // ->where('id_cart', $id_cart);
        // $checkout->update(['aksi' => "checkout"])
        // ;

        $product = DB::table('cart')
        ->where('user_id', Auth::user()->user_id)
        ->first();


        DB::table('checkout')->insert([
            'id_obat' => $product->id_obat,
            'price' => $product->price,
            'quantity' => $product->quantity,
            'user_id' => Auth::user()->user_id,
            
        ]);

        // dd($checkout);

        return back()->with('success', 'Berhasil Checkout');
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
    public function destroy($id_cart)
    {
        DB::table('cart')->where('user_id', Auth::user()->user_id)->where('id_cart',$id_cart)->delete();       
        return back();
        
    }
}
