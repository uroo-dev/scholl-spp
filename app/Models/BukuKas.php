<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BukuKas extends Model
{
    protected $table = 'buku_kas';

    protected $fillable = [
        'tanggal',
        'pembayaran_id',
        'koreksi_id',
        'keterangan',
        'uang_masuk',
        'uang_keluar',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'uang_masuk' => 'integer',
        'uang_keluar' => 'integer',
    ];

    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class);
    }

    public function koreksi()
    {
        return $this->belongsTo(KoreksiPembayaran::class, 'koreksi_id');
    }
}