<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trening extends Model
{
    use HasFactory;

    protected $table = 'treninzi';

    protected $fillable = [
        'naziv',
        'trajanje',
        'nivoTezine',
        'polaznik_id',
        'instruktor_id',
    ];

    public function polaznik()
    {
        return $this->belongsTo(Polaznik::class);
    }

    public function instruktor()
    {
        return $this->belongsTo(Instruktor::class);
    }
}
