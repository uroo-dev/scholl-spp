<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DendaTagihan extends Model
{
    protected $table = 'dendas';
    protected $fillable = [
        'tagihan_id',
        'kebijakan_denda_id',
        'nominal',
        'alasan',
        'disetujui_oleh',
    ];

    public function tagihan(){
        return $this->belongsTo(Tagihan::class);
    }

    public function kebijakan_denda(){
        return $this->belongsTo(KebijakanDenda::class);
    }

    public function disetujui_oleh(){
        return $this->belongsTo(User::class);
    }
}
