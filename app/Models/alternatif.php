<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alternatif extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_alternatif';
    protected $fillable = ['nama_alternatif', 'ticker'];

    public function matrixkeputusan()
    {
        return $this->hasMany(matrixkeputusan::class, 'id_alternatif');
    }
}
