<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anak extends Model
{
    /** @use HasFactory<\Database\Factories\AnakFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'kake_id',
        'nenek_id',
        'bapak_id',
        'ibu_id'
    ];
}
