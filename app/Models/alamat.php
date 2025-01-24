<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alamat extends Model
{
    /** @use HasFactory<\Database\Factories\AlamatFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'detail',
        'desa_id'
    ];
    public function desas()
    {
        return $this->belongsTo(desa::class);
    }
    public function pondoks()
    {
        return $this->morphedByMany(pondok::class, 'alamatable');
    }
    public function kawasans()
    {
        return $this->morphedByMany(kawasan::class, 'alamatable');
    }
    public function users()
    {
        return $this->morphedByMany(user::class, 'alamatable');
    }
    public function alamatables()
    {
        return $this->morphTo(alamatable::class, 'alamatable');
    }
}


