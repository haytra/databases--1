<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak3 extends Model
{
    /** @use HasFactory<\Database\Factories\Anak3Factory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'anak1_id',
    ];
}
