<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suplier';
    protected $primaryKey = 'id_suplier';
    
    protected $fillable = [       
        	'id_suplier','nama_sup','alamat','telp'
    ];

    public function obats(){
        return $this->hasMany(Obat::class);
    }
}
