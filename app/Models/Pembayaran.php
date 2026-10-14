<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayarans';

    protected $fillable = [
        'nomor_kuitansi',
        'pembayar_id',
        'metode',
        'jumlah',
        'status',
        'tanggal_bayar',
        'dicatat_oleh',
        'berkas_bukti',
        'diverifikasi_oleh',
        'kunci_unik',
        'id_transaksi_gateway',
    ];

    protected $casts = [
        'tanggal_bayar' => 'datetime',
        'jumlah' => 'integer',
    ];

    public function pembayar()
    {
        return $this->belongsTo(User::class, 'pembayar_id');
    }

    public function dicatatOleh()
    {
        return $this->belongsTo(User::class, 'dicatat_oleh');
    }

    public function diverifikasiOleh()
    {
        return $this->belongsTo(User::class, 'diverifikasi_oleh');
    }

    public function koreksiPembayaran()
    {
        return $this->hasMany(KoreksiPembayaran::class);
    }

    public function bukuKas()
    {
        return $this->hasMany(BukuKas::class);
    }
}