<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alamaTable extends Model
{
    /** @use HasFactory<\Database\Factories\AlamaTableFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'desa_id',
        'detail'
    ];
    public function alamatables()
    {
        return $this->morphTo();
    }
}
