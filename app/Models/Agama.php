<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Pasien;

class Agama extends Model
{
    use HasFactory;
    protected $table = "agama";

    public function pasien()
    {
    	return $this->hasOne(Pasien::class, 'id', 'Agama');
    }
}
