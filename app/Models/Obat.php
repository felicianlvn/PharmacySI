<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $table = 'obat';
    protected $primaryKey = 'id_obat';
    public $timestamps = false;

    protected $fillable = [       
        	'id_obat', 'id_kategori', 'id_jenis', 'stok' ,'nama_obat','harga_beli','harga_jual','tgl_expired','deskripsi','image','id_suplier','penyimpanan'
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }

    public function jenis(){
        return $this->belongsTo(Jenis::class);
    }

}
