<?php

namespace App\Http\Controllers;

use App\Models\kriteria;
use Validator;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index()
    {
        $kriteria = kriteria::all();
        return view('kriteria.kriteria', ['kriteria' => $kriteria]);
    }
    public function create()
    {
        return view('kriteria.input');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make(
            $input,
            [
                'nama_kriteria' => 'required',
                'status' => 'required',
            ]
        );
        kriteria::create($input);
        return redirect('/kriteria');
    }   
    public function show($id)
    {
        $kriteria = kriteria::find($id);
        return view('kriteria.update', ['kriteria' => $kriteria]);
    }
    public function update(Request $request, kriteria $kriteria)
    {
        $input = $request->all();
        $validator = Validator::make(
            $input,
            [
                'id' => 'required',
                'nama_kriteria' => 'required',
                'status' => 'required',
            ]
        );
        $data = kriteria::find($request->id);
        $data->nama_kriteria = $request->nama_kriteria;
        $data->status = $request->status;
        $data->save();
        return redirect('/kriteria');
    }
    public function destroy($id)
    {
        $data = kriteria::find($id);
        $data->delete();
        return redirect('/kriteria');
    }
}
