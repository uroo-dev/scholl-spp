<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    protected $table = 'tagihans';
    protected $fillable = [
        'nomor',
        'siswa_id',
        'periode',
        'jatuh_tempo',
        'total',
        'status',
    ];

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }

    public function rincian_tagihan(){
        return $this->hasMany(RincianTagihan::class);
    }

    public function denda_tagihan(){
        return $this->hasMany(DendaTagihan::class);
    }
}
