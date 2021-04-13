<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;
use App\Models\Pasien;

class StatusPasien extends Model
{
    use HasFactory;

    protected $table = 'status_pasien';
    // protected $primaryKey = 'IdStatus';
    // protected $foreignKey = 'StatusPasien';

    public function pasien()
    {
    	return $this->hasOne(Pasien::class, 'IdStatus', 'StatusPasien');
    }
}
