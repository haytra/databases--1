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
}
