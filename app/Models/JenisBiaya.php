<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisBiaya extends Model
{
    protected $table = 'jenis_biayas';
    protected $fillable = [
        'kode',
        'nama',
        'nominal',
    ];

    public function rincian_tagihan(){
        return $this->hasMany(RincianTagihan::class);
    }
}
