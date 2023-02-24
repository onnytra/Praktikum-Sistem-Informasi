<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bobot extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_bobot';
    protected $fillable = ['id_kriteria','roc'];

    public function kriteria()
    {
        return $this->belongsTo(kriteria::class, 'id_kriteria');
    }
    public function matrixkeputusan()
    {
        return $this->hasMany(matrixkeputusan::class, 'id_bobot');
    }
}
