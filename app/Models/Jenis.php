<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;
    protected $table = 'jenis_obat';
    protected $primaryKey = 'id_jenis';
    public $timestamps = false;

    protected $fillable = [       
        	'id_jenis','jenis',
    ];

    public function obatj(){
        return $this->hasMany(Obat::class);
    }
}
