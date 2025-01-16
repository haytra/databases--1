<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anak2 extends Model
{
    /** @use HasFactory<\Database\Factories\Anak2Factory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'anak1_id',
    ];
}
