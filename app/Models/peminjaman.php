<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    /** @use HasFactory<\Database\Factories\PeminjamanFactory> */
    use HasFactory;

    protected $fillable = [
      'rakbuku_id',
      'buku_id',
      'anggota_id',
      'tanggal_peminjaman',
      'tanggal_pengembalian',
      'status',  
    ];
}
