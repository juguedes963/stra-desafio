<?php

namespace Database\Seeders;

use App\Models\Film;
use App\Models\FilmPeople;
use App\Models\FilmStartship;
use App\Models\People;
use App\Models\Planets;
use App\Models\Starships;
use App\Models\Vehicles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {

        $registerFilms = Http::get("https://swapi.dev/api/films")->json();


        for ($i = 0; $i < 2; $i++) {
            Film::create([
                "title" => $registerFilms['results'][$i]["title"],
                "episode_id" => $registerFilms['results'][$i]["episode_id"],
                "opening_crawl" => $registerFilms['results'][$i]["opening_crawl"],
                "director" => $registerFilms['results'][$i]["director"],
                "producer" => $registerFilms['results'][$i]["producer"],
                "release_date" =>  $registerFilms['results'][$i]["release_date"],
                "characters" => json_encode([
                    $registerFilms['results'][$i]['characters']
                ]),
                "planets" => json_encode([
                    $registerFilms['results'][$i]['planets']
                ]),
                "starships" => json_encode([
                    $registerFilms['results'][$i]['starships']
                ]),
                "vehicles" => json_encode([
                    $registerFilms['results'][$i]['vehicles']
                ]),
                "species" => json_encode(
                    $registerFilms['results'][$i]['species']
                ),
            ]);
            foreach ($registerFilms['results'][$i]['characters'] as $key => $url) {
                $responseData = Http::get($url)->json();
                People::create([
                    "name" => $responseData["name"],
                    "height" => $responseData["height"],
                    "mass" => $responseData["mass"],
                    "hair_color" => $responseData["hair_color"],
                    "skin_color" => $responseData["skin_color"],
                    "birth_year" =>  $responseData["birth_year"],
                    "eye_color" => $responseData['eye_color'],
                    "gender" => $responseData["gender"],
                    "homeworld" =>  $responseData["homeworld"],
                    "films" => json_encode([
                        $responseData['films']
                    ]),
                    "species" => json_encode([
                        $responseData['species']
                    ]),
                    "vehicles" => json_encode([
                        $responseData['vehicles']
                    ]),
                    "starships" => json_encode([
                        $responseData['starships']
                    ])
                ]);
            }

            foreach ($registerFilms['results'][$i]['planets'] as $key => $url) {
                $responseData = Http::get($url)->json();

                Planets::create([
                    "name" => $responseData["name"],
                    "rotation_period" => $responseData["rotation_period"],
                    "orbital_period" => $responseData["orbital_period"],
                    "diameter" => $responseData["diameter"],
                    "climate" => $responseData["climate"],
                    "gravity" =>  $responseData["gravity"],
                    "terrain" => $responseData['terrain'],
                    "surface_water" => $responseData["surface_water"],
                    "population" =>  $responseData["population"],
                    "residents" => json_encode([
                        $responseData['residents']
                    ]),
                    "films" => json_encode([
                        $responseData['films']
                    ])
                ]);
            }
            foreach ($registerFilms['results'][$i]['starships'] as $key => $url) {
                $responseData = Http::get($url)->json();
              print_r($responseData);
                Starships::create([
                    "name" => $responseData["name"],
                    "model" => $responseData["model"],
                    "manufacturer" => $responseData["manufacturer"],
                    "cost_in_credits" => $responseData["cost_in_credits"],
                    "length" => $responseData["length"],
                    "max_atmosphering_speed" =>  $responseData["max_atmosphering_speed"],
                    "crew" => $responseData['crew'],
                    "passengers" => $responseData["passengers"],
                    "cargo_capacity" =>  $responseData["cargo_capacity"],
                    "consumables" => $responseData["consumables"],
                    "MGLT" =>  $responseData["MGLT"],
                    "starship_class" =>  $responseData["starship_class"],
                    "films" => json_encode([
                        $responseData['films']
                    ]),
                    "pilots" => json_encode([
                        $responseData['pilots']
                    ])
                ]);
            }
            foreach ($registerFilms['results'][$i]['vehicles'] as $key => $url) {
                $responseData = Http::get($url)->json();

                Vehicles::create([
                    "name" => $responseData["name"],
                    "model" => $responseData["model"],
                    "manufacturer" => $responseData["manufacturer"],
                    "cost_in_credits" => $responseData["cost_in_credits"],
                    "length" => $responseData["length"],
                    "max_atmosphering_speed" =>  $responseData["max_atmosphering_speed"],
                    "crew" => $responseData['crew'],
                    "passengers" => $responseData["passengers"],
                    "cargo_capacity" =>  $responseData["cargo_capacity"],
                    "consumables" => $responseData['consumables'],
                    "hyperdrive_rating" => $responseData["hyperdrive_rating"],
                    "MGLT" =>  $responseData["MGLT"],
                    "starship_class" => $responseData["starship_class"],
                    "films" => json_encode([
                        $responseData['films']
                    ]),
                    "pilots" => json_encode([
                        $responseData['pilots']
                    ]),
                ]);
            }
            foreach ($registerFilms['results'][$i]['species'] as $key => $url) {
                $responseData = Http::get($url)->json();
              
                People::create([
                    "name" => $responseData["name"],
                    "classification" => $responseData["classification"],
                    "average_height" => $responseData["average_height"],
                    "skin_colors" => $responseData["skin_colors"],
                    "eye_colors" => $responseData["eye_colors"],
                    "hair_colors" =>  $responseData["hair_colors"],
                    "eye_color" => $responseData['eye_color'],
                    "average_lifespan" => $responseData["average_lifespan"],
                    "homeworld" =>  $responseData["homeworld"],
                    "language" =>  $responseData["language"],
                    "films" => json_encode([
                        $responseData['films']
                    ]),
                    "people" => json_encode([
                        $responseData['people']
                    ])
                ]);
            }
        }



        // foreach ($dadosJson as $key => $value) {
        //     print_r($value);
        // };

    }
}
