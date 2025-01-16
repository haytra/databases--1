<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anak1 extends Model
{
    /** @use HasFactory<\Database\Factories\Anak1Factory> */
    use HasFactory;
    protected $fillable = [
        'name',
    ];
}
