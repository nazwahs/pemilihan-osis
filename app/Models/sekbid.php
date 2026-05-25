<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sekbid extends Model
{
    protected $fillable = [
        'nama_sekbid',
        'deskripsi'
    ];

    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class);
    }

    public function pertanyaans()
    {
        return $this->hasMany(Pertanyaan::class);
    }
}