<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftarans';

    protected $fillable = [
        'nama_lengkap',
        'nis',
        'kelas',
        'no_hp',
        'sekbid_id',
        'status'
    ];

    /**
     * Relasi ke sekbid
     */
    public function sekbid()
    {
        return $this->belongsTo(Sekbid::class);
    }

      public function jawabans()
    {
        return $this->hasMany(Jawaban::class);
    }
}