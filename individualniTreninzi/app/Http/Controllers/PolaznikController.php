<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PolaznikResource;
use App\Models\Polaznik;

class PolaznikController extends Controller
{
    public function index()
    {
        $polaznici = Polaznik::all();
        return PolaznikResource::collection($polaznici);
    }


    public function show(Polaznik $polaznik)
    {
        return new PolaznikResource($polaznik);
    }
}
