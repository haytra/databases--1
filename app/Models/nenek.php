<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nenek extends Model
{
    /** @use HasFactory<\Database\Factories\NenekFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'kake_id',
    ];
    public function kakes(){
        return $this->belongsTo(kake::class);
    }
    public function bapaks(){
        return $this->hasMany(bapak::class);
    }
}
