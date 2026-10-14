<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KebijakanDenda extends Model
{
    protected $table = 'kebijakan_dendas';
    protected $fillable = [
        'nama',
        'nominal',
        'is_active',
    ];

    public function denda_tagihan(){
        return $this->hasMany(DendaTagihan::class);
    }
}
