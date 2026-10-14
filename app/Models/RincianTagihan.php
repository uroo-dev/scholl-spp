<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RincianTagihan extends Model
{
    protected $table = 'rincian_tagihans';
    protected $fillable = [
        'tagihan_id',
        'jenis_biaya_id',
        'nama_biaya',
        'nominal',
    ];

    public function tagihan(){
        return $this->belongsTo(Tagihan::class);
    }

    public function jenis_biaya(){
        return $this->belongsTo(JenisBiaya::class);
    }
}
