<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteria extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_kriteria';
    protected $fillable = ['nama_kriteria', 'status'];

    public function bobot()
    {
        return $this->hasMany(bobot::class, 'id_kriteria');
    }
}
