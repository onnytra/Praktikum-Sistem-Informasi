<?php

namespace App\Http\Controllers;

use App\Models\bobot;
use App\Models\kriteria;
use Illuminate\Http\Request;
use Validator;

class BobotController extends Controller
{
    public function index()
    {
        $bobot = bobot::with('kriteria')->get();
        return view('bobot.bobot', ['bobot' => $bobot]);
    }
    public function create()
    {
        $kriteria = kriteria::all();
        return view('bobot.input', ['kriteria' => $kriteria]);
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make(
            $input,
            [
                'id_kriteria' => 'required',
                'roc' => 'required',
            ]
        );
        bobot::create($input);
        return redirect('/bobot');
    }
    public function show($id)
    {
        $bobot = bobot::find($id);
        return view('bobot.update', ['bobot' => $bobot]);
    }
    public function update(Request $request, bobot $bobot)
    {
        $input = $request->all();
        $validator = Validator::make(
            $input,
            [
                'id' => 'required',
                'roc' => 'required',
            ]
        );
        $data = bobot::find($request->id);
        $data->roc = $request->roc;
        $data->save();
        return redirect('/bobot');
    }
    public function destroy(bobot $bobot)
    {
        $data = bobot::find($bobot->id_bobot);
        $data->delete();
        return redirect('/bobot');
    }
}
