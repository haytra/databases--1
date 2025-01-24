<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class desa extends Model
{
    /** @use HasFactory<\Database\Factories\DesaFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'kota_id'
    ];
    public function kotas()
    {
        return $this->belongsTo(kota::class);
        
    }
    public function alamata()
    {
        return $this->hasMany(alamat::class);
    }
}
