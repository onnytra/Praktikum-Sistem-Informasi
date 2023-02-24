<?php

namespace App\Http\Controllers;

use App\Models\alternatif;
use App\Models\bobot;
use App\Models\kriteria;
use App\Models\matrixkeputusan;
use Illuminate\Http\Request;
use Validator;

class MatrixkeputusanController extends Controller
{
    public function index()
    {
        // $matrixkeputusan = matrixkeputusan::all();
        $matrixkeputusan = matrixkeputusan::with('bobot','alternatif')->get();
        return view('matrixkeputusan.matrixkeputusan', ['matrixkeputusan' => $matrixkeputusan]);
    }
    public function create()
    {
        $alternatif = alternatif::all();
        $bobot = bobot::all();
        // return view('matrixkeputusan.input', ['matrixkeputusan' => $matrixkeputusan]);
        return view('matrixkeputusan.input', ['alternatif' => $alternatif, 'bobot' => $bobot]);
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make(
            $input,
            [
                'id_alternatif' => 'required',
                'id_bobot' => 'required',
                'value' => 'required',
            ]
        );
        matrixkeputusan::create($input);
        return redirect('/matrixkeputusan');
    }
    public function show($id)
    {
        $matrixkeputusan = matrixkeputusan::find($id);
        return view('matrixkeputusan.update', ['matrixkeputusan' => $matrixkeputusan]);
    }
    public function update(Request $request, matrixkeputusan $matrixkeputusan)
    {
        $input = $request->all();
        $validator = Validator::make(
            $input,
            [
                'id' => 'required',
                'value' => 'required',
            ]
        );
        $data = matrixkeputusan::find($request->id);
        $data->value = $request->value;
        $data->save();
        return redirect('/matrixkeputusan');
    }
    public function destroy(matrixkeputusan $matrixkeputusan)
    {
        $data = matrixkeputusan::find($matrixkeputusan->id_matrix);
        $data->delete();
        return redirect('/matrixkeputusan');
    }
}
