<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'episode_id',
        'opening_crawl',
        'director',
        'producer',
        'release_date',
        'characters' => 'array',
        'planets'=> 'array',
        'starships'=> 'array',
        'vehicles'=> 'array',
        'species'=> 'array'
    ];
    public function people()
    {
        return $this->belongsToMany(People::class, 'film_people');
    }
}
