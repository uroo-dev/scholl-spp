<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = [
        'nama',
        'tingkat',
        'tahun_ajar',
    ];

    public function siswa(){
        return $this->hasMany(Siswa::class);
    }
}
