<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kawasan extends Model
{
    /** @use HasFactory<\Database\Factories\KawasanFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'pondok_id'
    ];
    public function pondoks()
    {
        return $this->belongsTo(pondok::class);
    }
    public function users()
    {
        return $this->hasMany(user::class);
    }
    public function alamats()
    {
        return $this->morphToMany(alamat::class, 'alamatable');
    }
}
