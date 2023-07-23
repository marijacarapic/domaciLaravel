<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trening extends Model
{
    use HasFactory;

    public function polaznik()
    {
        return $this->belongsTo(Polaznik::class);
    }

    public function instruktor()
    {
        return $this->belongsTo(Instruktor::class);
    }
}
