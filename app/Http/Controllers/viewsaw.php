<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class viewsaw extends Controller
{
    public function vmatrix()
    {
        $matrix = DB::table('vmatrixkeputusan')->get();
        return view('m_saw.vmatrix',['matrix' => $matrix]);
    }
    public function maxmin(){
        $max = DB::table('vnilaimax')->get();
        $min = DB::table('vnilaimin')->get();
        return view('m_saw.vmaxmin',['max' => $max, 'min' => $min]);
    }
    public function normalisasi(){
        $normalisasi = DB::table('vnormalisasi')->get();
        return view('m_saw.vnorma',['normalisasi' => $normalisasi]);
    }
    public function rank(){
        $rank = DB::table('vrangking')->get();
        return view('m_saw.vrank',['rank' => $rank]);
    }
}
