<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'height',
        'mass',
        'hair_color',
        'skin_color',
        'eye_color',
        'birth_year',
        'gender',
        'homeworld',
        'films' => 'array',
        'species' => 'array',
        'vehicles' => 'array',
        'starships' => 'array',
    ];
    public function film()
    {
        return $this->belongsToMany(Film::class, 'film_people');
    }
}
