<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matrixkeputusan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_matrix';
    protected $fillable = ['id_alternatif','id_bobot','value'];

    public function alternatif()
    {
        return $this->belongsTo(alternatif::class, 'id_alternatif');
    }
    public function bobot()
    {
        return $this->belongsTo(bobot::class, 'id_bobot');
    }
}
