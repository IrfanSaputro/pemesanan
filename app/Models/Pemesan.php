<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesan extends Model
{
    protected $primaryKey = 'id_pemesan';
    protected $table = 'table_pemesan';
    protected $fillable = [
        'nama_pemesan',
        'alamat_pemesan',
        'telepon_pemesan',
        'produk_pemesan',
        'deskripsi',
        'harga'
    ];


}
