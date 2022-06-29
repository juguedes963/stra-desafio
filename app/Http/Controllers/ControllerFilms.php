<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Http;

class ControllerFilms extends Controller
{
    public function __invoke()
    {
        $registerFilms = Http::get("https://swapi.dev/api/films")->json();

        return $registerFilms;
    }
}
