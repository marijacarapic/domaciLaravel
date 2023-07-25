<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\TreningResource;
use App\Models\Trening;

class TreningController extends Controller
{
    public function index()
    {
        $trening = Trening::all();
        return TreningResource::collection($trening);
    }


    public function show(Trening $trening)
    {
        return new TreningResource($trening);
    }

    public function destroy(Trening $trening)
    {
        $trening->delete();
        return response()->json('Uspešno obrisan trening!');
    }
}
