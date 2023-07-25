<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\InstruktorResource;
use App\Models\Instruktor;

class InstruktorController extends Controller
{
    public function index()
    {
        $instruktori = Instruktor::all();
        return InstruktorResource::collection($instruktori);
    }


    public function show(Instruktor $instruktor)
    {
        return new InstruktorResource($instruktor);
    }

    public function create(Request $request)
    {
    $validator = Validator::make($request->all(), [
        'imePrezime' => 'required',
        'grad' => 'required',
        'godiste' => 'required',
        'specijalnost' => 'required',
        'kontaktTelefon' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json($validator->errors());
    }

    $instruktor = new Instruktor();
    $instruktor->imePrezime = $request->imePrezime;
    $instruktor->grad = $request->grad;
    $instruktor->godiste = $request->godiste;
    $instruktor->specijalnost = $request->specijalnost;
    $instruktor->kontaktTelefon = $request->kontaktTelefon;

    $instruktor->save();

    return response()->json(['Uspešno kreiran novi instruktor!', new InstruktorResource($instruktor)]);
    }


    public function update(Request $request, Instruktor $instruktor)
    {
        $validator = Validator::make($request->all(), [
            'imePrezime' => 'required',
            'grad' => 'required',
            'godiste' => 'required',
            'specijalnost' => 'required',
            'kontaktTelefon' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $instruktor->imePrezime = $request->imePrezime;
        $instruktor->grad = $request->grad;
        $instruktor->godiste = $request->godiste;
        $instruktor->specijalnost = $request->specijalnost;
        $instruktor->kontaktTelefon = $request->kontaktTelefon;
       

        $instruktor->save();

        return response()->json(['Uspešno izmenjen instruktor!', new InstruktorResource($instruktor)]);
    }

    public function destroy(Instruktor $instruktor)
    {
        $instruktor->delete();
        return response()->json('Uspešno obrisan instruktor!');
    }
}
