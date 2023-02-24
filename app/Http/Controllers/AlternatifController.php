<?php

namespace App\Http\Controllers;

use App\Models\alternatif;
use Validator;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index()
    {
        $alternatif = alternatif::all();
        return view('alternatif.alternatif', ['alternatif' => $alternatif]);
    }
    public function create()
    {
        return view('alternatif.input');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make(
            $input,
            [
                'nama_alternatif' => 'required',
                'ticker' => 'required',
            ]
        );
        alternatif::create($input);
        return redirect('/alternatif');
    }
    public function show($id)
    {
        $alternatif = alternatif::find($id);
        return view('alternatif.update', ['alternatif' => $alternatif]);
    }
    public function update(Request $request, alternatif $alternatif)
    {
        $input = $request->all();
        $validator = Validator::make(
            $input,
            [
                'id' => 'required',
                'nama_alternatif' => 'required',
                'ticker' => 'required',
            ]
        );
        $data = alternatif::find($request->id);
        $data->nama_alternatif = $request->nama_alternatif;
        $data->ticker = $request->ticker;
        $data->save();
        return redirect('/alternatif');
    }
    public function destroy(alternatif $alternatif)
    {
        $data = alternatif::find($alternatif->id_alternatif);
        $data->delete();
        return redirect('/alternatif');
    }
}
