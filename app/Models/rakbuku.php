<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rakbuku extends Model
{
    /** @use HasFactory<\Database\Factories\RakbukuFactory> */
    use HasFactory;

    protected $fillable = [
      'pustakawan_id',
      'norak',  
    ];
}
