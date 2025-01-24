<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pondok extends Model
{
    /** @use HasFactory<\Database\Factories\PondokFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function kawasans()
    {
        return $this->hasMany(kawasan::class);
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
