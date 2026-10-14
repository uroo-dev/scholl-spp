<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogAudit extends Model
{
    protected $table = 'log_audits';

    protected $fillable = [
        'pengguna_id',
        'aksi',
        'nama_tabel',
        'id_data',
        'nilai_lama',
        'nilai_baru',
        'alamat_ip',
    ];

    protected $casts = [
        'nilai_lama' => 'array',
        'nilai_baru' => 'array',
    ];

    public function pengguna()
    {
        return $this->belongsTo(User::class, 'pengguna_id');
    }
}