<?php

namespace App\Models;

use App\Models\anak;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ibu extends Model
{
    /** @use HasFactory<\Database\Factories\IbuFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'kake_id',
        'nenek_id',
        'bapak_id',
    ];
    public function bapaks(){
        return $this->belongsTo(bapak::class);
    }
    public function anaks(){
        return $this->hasMany( anak::class);
    }
}
