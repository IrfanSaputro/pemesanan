<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $primaryKey = 'id_produk';
    protected $table = 'table_produk';
    protected $fillable = [
        'nama_produk',
        'deskripsi_produk',
        'gambar_produk',
        'harga_produk'
    ];
}
