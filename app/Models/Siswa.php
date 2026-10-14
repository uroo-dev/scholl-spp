<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = [
        'wali_id',
        'kelas_id',
        'nis',
        'is_active',
    ];

    public function wali(){
        return $this->belongsTo(User::class);
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function tagihan(){
        return $this->hasMany(Tagihan::class);
    }
}
