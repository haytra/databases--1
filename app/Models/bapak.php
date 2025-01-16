<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bapak extends Model
{
    /** @use HasFactory<\Database\Factories\BapakFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'kake_id',
        'nenek_id',
    ];
}
