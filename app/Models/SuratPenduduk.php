<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPenduduk extends Model
{
    use HasFactory;

    protected $table = "surat_penduduk";

    protected $fillable = [
        'nik',
        'no_kk',
        'nama',
        'alasan_pindah',
        'jumlah_pengikut',
    ];

    public function keluarga(){
        return $this->belongsTo(AnggotaKeluarga::class, 'nik', 'nik');
    }

    public function kartukeluarga(){
        return $this->belongsTo(KartuKeluarga::class, 'no_kk', 'no_kk');
    }
}
