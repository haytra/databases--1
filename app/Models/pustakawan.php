<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pustakawan extends Model
{
    /** @use HasFactory<\Database\Factories\PustakawaanFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'alamat',
        'noTlp',
        // 'image',    
    ];
}

