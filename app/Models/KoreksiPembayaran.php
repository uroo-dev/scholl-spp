<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KoreksiPembayaran extends Model
{
    protected $table = 'koreksi_pembayarans';

    protected $fillable = [
        'pembayaran_id',
        'jenis',
        'jumlah',
        'alasan',
        'diajukan_oleh',
        'disetujui_oleh',
        'status',
    ];

    protected $casts = [
        'jumlah' => 'integer',
    ];

    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class);
    }

    public function diajukanOleh()
    {
        return $this->belongsTo(User::class, 'diajukan_oleh');
    }

    public function disetujuiOleh()
    {
        return $this->belongsTo(User::class, 'disetujui_oleh');
    }

    public function bukuKas()
    {
        return $this->hasMany(BukuKas::class);
    }
}