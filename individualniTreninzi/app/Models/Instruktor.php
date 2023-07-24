<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instruktor extends Model
{
    use HasFactory;

    protected $table = 'instruktori';

    protected $fillable = [
        'imePrezime',
        'grad',
        'godiste',
        'specijalnost',
        'kontaktTelefon',
    ];

    public function treninzi()
    {
        return $this->hasMany(Trening::class);
    }
}
