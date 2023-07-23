<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polaznik extends Model
{
    use HasFactory;

    public function treninzi()
    {
        return $this->hasMany(Trening::class);
    }
}
