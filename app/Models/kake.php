<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kake extends Model
{
    /** @use HasFactory<\Database\Factories\KakeFactory> */
    use HasFactory;
    protected $fillable=[
        'name'
    ];
    public function neneks(){
        return $this->hasMany(nenek::class);
    }
}
