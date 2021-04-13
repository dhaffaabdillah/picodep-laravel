<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;
use App\Models\Agama;
use App\Models\StatusPasien;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $primaryKey = 'Id';
    protected $fillable = [
        'NamaPasien',
        'JenisKelamin',
        'Alamat',
        'KelurahanTinggal',
        'KecamatanTinggal',
        'StatusPasien',
        'TempatIsolasi',
        'Agama',
        'TanggalLahir',
        'TanggalPemeriksaan',
    ];

    public function statuspasien()
    {
    	return $this->belongsTo(StatusPasien::class, 'StatusPasien', 'IdStatus');
    }
    
    public function agama()
    {
    	return $this->belongsTo(Agama::class, 'Agama', 'id');
    }
    
    public function tempatisolasi()
    {
        return $this->belongsTo(TempatIsolasi::class, 'TempatIsolasi', 'Id');
    }
}
