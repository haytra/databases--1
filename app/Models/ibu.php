<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
