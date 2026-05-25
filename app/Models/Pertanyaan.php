<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $fillable = [
        'sekbid_id',
        'pertanyaan'
    ];

    public function sekbid()
    {
        return $this->belongsTo(Sekbid::class);
    }
}
