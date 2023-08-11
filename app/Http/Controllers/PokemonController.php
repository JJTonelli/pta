<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pokemon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pokemon.pokemonListar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($numero)
    {
        $pokemon = Pokemon::where('Numero', $numero)->first();

        return view('pokemon.pokemonDetalle',[
            'pokemon' => $pokemon
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getPokemonesSprites() {

        try {
            $pokemones = Pokemon::where('Nombre', '!=', 'Type: Null')->where('Imagen', null)->where('Sprite', null)->where('ImagenShiny', null)->where('SpriteShiny', null)->get();

            foreach($pokemones as $p) {
                set_time_limit(0);

                Log::log('INFO', $p->PokemonID);

                if($p->Nombre == 'Mr. Mime') {
                    $asd = 'mr-mime';
                } else if($p->Nombre == 'Mime Jr.') {
                    $asd = 'mime-jr';
                }else if($p->Nombre == 'Mr. Rime') {
                    $asd = 'mr-rime';
                }else if($p->Nombre == "Farfetch'd (Massive Leek)") {
                    $asd = 'farfetchd-galar';
                }else if($p->Nombre == "Farfetch'd") {
                    $asd = 'farfetchd';
                }else if($p->Nombre == "Sirfetch'd") {
                    $asd = 'sirfetchd';
                }else if($p->Nombre == "Wormadam (Plant Cloak)") {
                    $asd = 'wormadam-plant';
                }else if($p->Nombre == "Wormadam (Sand Cloak)") {
                    $asd = 'wormadam-sandy';
                }else if($p->Nombre == "Wormadam (Trash Cloak)") {
                    $asd = 'wormadam-trash';
                }else if($p->Nombre == "Toxtricity") {
                    $asd = 'toxtricity-amped';
                }else if($p->Nombre == "Gigantamax Toxtricity") {
                    $asd = 'toxtricity-amped-gmax';
                } else if($p->Nombre == "Morpeko (Full Belly)") {
                    $asd = 'morpeko-full-belly';
                } else if($p->Nombre == "Morpeko (Hangry)") {
                    $asd = 'morpeko-hangry';
                } else if($p->Nombre == "Flabébé") {
                    $asd = 'flabebe';
                }else if($p->Nombre == "Darmanitan") {
                    $asd = 'darmanitan-standard';
                }else if($p->Nombre == "Darmanitan (Icy Mountain)") {
                    $asd = 'darmanitan-galar-standard';
                }else if($p->Nombre == "Darmanitan (Icy Mountain Zen Mode)") {
                    $asd = 'darmanitan-galar-zen';
                } else if($p->Nombre == "Darmanitan (Zen mode)") {
                    $asd = 'darmanitan-zen';
                } else if($p->Nombre == "Oricorio (Baile)") {
                    $asd = 'oricorio-baile';
                } else if($p->Nombre == "Oricorio (Pa'u)") {
                    $asd = 'oricorio-pau';
                }else if($p->Nombre == "Oricorio (Pom-Pom)") {
                    $asd = 'oricorio-pom-pom';
                }else if($p->Nombre == "Oricorio (Sensu)") {
                    $asd = 'oricorio-sensu';
                }else if($p->Nombre == "Pumpkaboo (Small)") {
                    $asd = 'pumpkaboo-small';
                }else if($p->Nombre == "Pumpkaboo (Medium)") {
                    $asd = 'pumpkaboo-average';
                }else if($p->Nombre == "Pumpkaboo (Large)") {
                    $asd = 'pumpkaboo-large';
                }else if($p->Nombre == "Gourgeist (Small)") {
                    $asd = 'gourgeist-small';
                }else if($p->Nombre == "Gourgeist (Medium)") {
                    $asd = 'gourgeist-average';
                }else if($p->Nombre == "Gourgeist (Large)") {
                    $asd = 'gourgeist-large';
                }else if($p->Nombre == "Mimikyu") {
                    $asd = 'mimikyu-disguised';
                }else if($p->Nombre == "Eiscue (Ice Face)") {
                    $asd = 'eiscue-ice';
                }else if($p->Nombre == "Eiscue (No Ice)") {
                    $asd = 'eiscue-noice';
                }else if($p->Nombre == "Nidoran (Female)") {
                    $asd = 'nidoran-f';
                } else if($p->Nombre == "Nidoran (Male)") {
                    $asd = 'nidoran-m';
                }else if($p->Nombre == "Mr. Mime (Icy Mountain)") {
                    $asd = 'mr-mime-galar';
                } else if($p->Nombre == "Meowstic (Female)") {
                    $asd = 'meowstic-female';
                } else if($p->Nombre == "Meowstic (Male)") {
                    $asd = 'meowstic-male';
                }else if($p->Nombre == "Indeedee (Female)") {
                    $asd = 'indeedee-female';
                }else if($p->Nombre == "Indeedee (Male)") {
                    $asd = 'indeedee-male';
                } else if($p->Nombre == "Lycanroc (Day)") {
                    $asd = 'lycanroc-midday';
                }  else if($p->Nombre == "Lycanroc (Night)") {
                    $asd = 'lycanroc-midnight';
                }  else if($p->Nombre == "Lycanroc (Dusk)") {
                    $asd = 'lycanroc-dusk';
                }else if($p->Nombre == "Minior") {
                    $asd = 'minior-red-meteor';
                }else if($p->Nombre == "Minior (Core Revealed)") {
                    $asd = 'minior-red';
                }else if($p->Nombre == "Aegislash (Shield)") {
                    $asd = 'aegislash-shield';
                }else if($p->Nombre == "Aegislash (Sword)") {
                    $asd = 'aegislash-blade';
                }else if($p->Nombre == "Basculin (White-striped)") {
                    $asd = 'basculin-white-striped';
                } else if($p->Nombre == "Basculin (Red-striped)") {
                    $asd = 'basculin-red-striped';
                } else if($p->Nombre == "Basculin (Blue-striped)") {
                    $asd = 'basculin-blue-striped';
                }else if($p->Nombre == "Basculegion (Male)") {
                    $asd = 'basculegion-male';
                }else if($p->Nombre == "Basculegion (Female)") {
                    $asd = 'basculegion-female';
                } else if($p->Nombre == "Wishiwashi (Solo)") {
                    $asd = 'wishiwashi-solo';
                } else if($p->Nombre == "Wishiwashi (School)") {
                    $asd = 'wishiwashi-school';
                }else if($p->Nombre == "Tapu Koko") {
                    $asd = 'tapu-koko';
                }else if($p->Nombre == "Tapu Lele") {
                    $asd = 'tapu-lele';
                }else if($p->Nombre == "Tapu Fini") {
                    $asd = 'tapu-fini';
                }else if($p->Nombre == "Tapu Bulu") {
                    $asd = 'tapu-bulu';
                } else if($p->Nombre == "Keldeo") {
                    $asd = 'keldeo-ordinary';
                }else if($p->Nombre == "Tornadus (Incarnate)") {
                    $asd = 'tornadus-incarnate';
                } else if($p->Nombre == "Tornadus (Therian)") {
                    $asd = 'tornadus-therian';
                }else if($p->Nombre == "Thundurus (Incarnate)") {
                    $asd = 'thundurus-incarnate';
                }else if($p->Nombre == "Thundurus (Therian)") {
                    $asd = 'thundurus-therian';
                }else if($p->Nombre == "Landorus (Incarnate)") {
                    $asd = 'landorus-incarnate';
                }else if($p->Nombre == "Landorus (Therian)") {
                    $asd = 'landorus-therian';
                }else if($p->Nombre == "Enamorus (Incarnate)") {
                    $asd = 'enamorus-incarnate';
                }else if($p->Nombre == "Enamorus (Therian)") {
                    $asd = 'enamorus-therian';
                }else if($p->Nombre == "Shaymin (Land)") {
                    $asd = 'shaymin-land';
                }else if($p->Nombre == "Shaymin (Sky)") {
                    $asd = 'shaymin-sky';
                } else if($p->Nombre == "Meloetta (Aria)") {
                    $asd = 'meloetta-aria';
                } else if($p->Nombre == "Meloetta (Pirouette)") {
                    $asd = 'meloetta-pirouette';
                }else if($p->Nombre == "Urshifu (Single Strike)") {
                    $asd = 'urshifu-single-strike';
                }else if($p->Nombre == "Urshifu (Rapid Strike)") {
                    $asd = 'urshifu-rapid-strike';
                }else if($p->Nombre == "Gigantamax Urshifu (Single Strike)") {
                    $asd = 'urshifu-single-strike-gmax';
                }else if($p->Nombre == "Gigantamax Urshifu (Rapid Strike)") {
                    $asd = 'urshifu-rapid-strike-gmax';
                }else if($p->Nombre == "Deoxys (Balance)") {
                    $asd = 'deoxys-normal';
                }else if($p->Nombre == "Deoxys (Attack)") {
                    $asd = 'deoxys-attack';
                }else if($p->Nombre == "Deoxys (Defense)") {
                    $asd = 'deoxys-defense';
                }else if($p->Nombre == "Deoxys (Speed)") {
                    $asd = 'deoxys-speed';
                }else if($p->Nombre == "Zygarde (10%)") {
                    $asd = 'zygarde-10';
                }else if($p->Nombre == "Zygarde (50%)") {
                    $asd = 'zygarde-50';
                }else if($p->Nombre == "Zygarde (Complete)") {
                    $asd = 'zygarde-complete';
                }else if($p->Nombre == "Giratina (Origin Form)") {
                    $asd = 'giratina-origin';
                }else if($p->Nombre == "Giratina (Altered Form)") {
                    $asd = 'giratina-altered';
                } else {
                    if(explode(' ', $p->Nombre)[0] == 'Mega' || explode(' ', $p->Nombre)[0] == 'Gigantamax') {
                        $asd = strtolower(explode(' ', $p->Nombre)[1]);
                    } else {
                        $asd = strtolower(explode(' ', $p->Nombre)[0]);
                    }
                }

                $response = Http::get('https://pokeapi.co/api/v2/pokemon/'.$asd);
                $jsonData = $response->json();

                $p->Imagen = $jsonData['sprites']['other']['official-artwork']['front_default'];
                $p->ImagenShiny = $jsonData['sprites']['other']['official-artwork']['front_shiny'];
                $p->Sprite = $jsonData['sprites']['front_default'];
                $p->SpriteShiny = $jsonData['sprites']['front_shiny'];
                $p->save();

                /*$p->Numero = $jsonData['id'];
                $p->save();*/

            }
        } catch(\Exception $e){
            dd($p, $asd);
        }
    }
    public function getPokemonesNumeros() {

        try {
            $pokemones = Pokemon::where('Nombre', '!=', 'Type: Null')->where('Numero', null)->get();

            foreach($pokemones as $p) {
                set_time_limit(0);

                Log::log('INFO', $p->PokemonID);

                if($p->Nombre == 'Mr. Mime') {
                    $asd = 'mr-mime';
                } else if($p->Nombre == 'Mime Jr.') {
                    $asd = 'mime-jr';
                }else if($p->Nombre == 'Mr. Rime') {
                    $asd = 'mr-rime';
                }else if($p->Nombre == "Farfetch'd (Massive Leek)") {
                    $asd = 'farfetchd-galar';
                }else if($p->Nombre == "Farfetch'd") {
                    $asd = 'farfetchd';
                }else if($p->Nombre == "Sirfetch'd") {
                    $asd = 'sirfetchd';
                }else if($p->Nombre == "Wormadam (Plant Cloak)") {
                    $asd = 'wormadam-plant';
                }else if($p->Nombre == "Wormadam (Sand Cloak)") {
                    $asd = 'wormadam-sandy';
                }else if($p->Nombre == "Wormadam (Trash Cloak)") {
                    $asd = 'wormadam-trash';
                }else if($p->Nombre == "Toxtricity") {
                    $asd = 'toxtricity-amped';
                }else if($p->Nombre == "Gigantamax Toxtricity") {
                    $asd = 'toxtricity-amped-gmax';
                } else if($p->Nombre == "Morpeko (Full Belly)") {
                    $asd = 'morpeko-full-belly';
                } else if($p->Nombre == "Morpeko (Hangry)") {
                    $asd = 'morpeko-hangry';
                } else if($p->Nombre == "Flabébé") {
                    $asd = 'flabebe';
                }else if($p->Nombre == "Darmanitan") {
                    $asd = 'darmanitan-standard';
                }else if($p->Nombre == "Darmanitan (Icy Mountain)") {
                    $asd = 'darmanitan-galar-standard';
                }else if($p->Nombre == "Darmanitan (Icy Mountain Zen Mode)") {
                    $asd = 'darmanitan-galar-zen';
                } else if($p->Nombre == "Darmanitan (Zen mode)") {
                    $asd = 'darmanitan-zen';
                } else if($p->Nombre == "Oricorio (Baile)") {
                    $asd = 'oricorio-baile';
                } else if($p->Nombre == "Oricorio (Pa'u)") {
                    $asd = 'oricorio-pau';
                }else if($p->Nombre == "Oricorio (Pom-Pom)") {
                    $asd = 'oricorio-pom-pom';
                }else if($p->Nombre == "Oricorio (Sensu)") {
                    $asd = 'oricorio-sensu';
                }else if($p->Nombre == "Pumpkaboo (Small)") {
                    $asd = 'pumpkaboo-small';
                }else if($p->Nombre == "Pumpkaboo (Medium)") {
                    $asd = 'pumpkaboo-average';
                }else if($p->Nombre == "Pumpkaboo (Large)") {
                    $asd = 'pumpkaboo-large';
                }else if($p->Nombre == "Gourgeist (Small)") {
                    $asd = 'gourgeist-small';
                }else if($p->Nombre == "Gourgeist (Medium)") {
                    $asd = 'gourgeist-average';
                }else if($p->Nombre == "Gourgeist (Large)") {
                    $asd = 'gourgeist-large';
                }else if($p->Nombre == "Mimikyu") {
                    $asd = 'mimikyu-disguised';
                }else if($p->Nombre == "Eiscue (Ice Face)") {
                    $asd = 'eiscue-ice';
                }else if($p->Nombre == "Eiscue (No Ice)") {
                    $asd = 'eiscue-noice';
                }else if($p->Nombre == "Nidoran (Female)") {
                    $asd = 'nidoran-f';
                } else if($p->Nombre == "Nidoran (Male)") {
                    $asd = 'nidoran-m';
                }else if($p->Nombre == "Mr. Mime (Icy Mountain)") {
                    $asd = 'mr-mime-galar';
                } else if($p->Nombre == "Meowstic (Female)") {
                    $asd = 'meowstic-female';
                } else if($p->Nombre == "Meowstic (Male)") {
                    $asd = 'meowstic-male';
                }else if($p->Nombre == "Indeedee (Female)") {
                    $asd = 'indeedee-female';
                }else if($p->Nombre == "Indeedee (Male)") {
                    $asd = 'indeedee-male';
                } else if($p->Nombre == "Lycanroc (Day)") {
                    $asd = 'lycanroc-midday';
                }  else if($p->Nombre == "Lycanroc (Night)") {
                    $asd = 'lycanroc-midnight';
                }  else if($p->Nombre == "Lycanroc (Dusk)") {
                    $asd = 'lycanroc-dusk';
                }else if($p->Nombre == "Minior") {
                    $asd = 'minior-red-meteor';
                }else if($p->Nombre == "Minior (Core Revealed)") {
                    $asd = 'minior-red';
                }else if($p->Nombre == "Aegislash (Shield)") {
                    $asd = 'aegislash-shield';
                }else if($p->Nombre == "Aegislash (Sword)") {
                    $asd = 'aegislash-blade';
                }else if($p->Nombre == "Basculin (White-striped)") {
                    $asd = 'basculin-white-striped';
                } else if($p->Nombre == "Basculin (Red-striped)") {
                    $asd = 'basculin-red-striped';
                } else if($p->Nombre == "Basculin (Blue-striped)") {
                    $asd = 'basculin-blue-striped';
                }else if($p->Nombre == "Basculegion (Male)") {
                    $asd = 'basculegion-male';
                }else if($p->Nombre == "Basculegion (Female)") {
                    $asd = 'basculegion-female';
                } else if($p->Nombre == "Wishiwashi (Solo)") {
                    $asd = 'wishiwashi-solo';
                } else if($p->Nombre == "Wishiwashi (School)") {
                    $asd = 'wishiwashi-school';
                }else if($p->Nombre == "Tapu Koko") {
                    $asd = 'tapu-koko';
                }else if($p->Nombre == "Tapu Lele") {
                    $asd = 'tapu-lele';
                }else if($p->Nombre == "Tapu Fini") {
                    $asd = 'tapu-fini';
                }else if($p->Nombre == "Tapu Bulu") {
                    $asd = 'tapu-bulu';
                } else if($p->Nombre == "Keldeo") {
                    $asd = 'keldeo-ordinary';
                }else if($p->Nombre == "Tornadus (Incarnate)") {
                    $asd = 'tornadus-incarnate';
                } else if($p->Nombre == "Tornadus (Therian)") {
                    $asd = 'tornadus-therian';
                }else if($p->Nombre == "Thundurus (Incarnate)") {
                    $asd = 'thundurus-incarnate';
                }else if($p->Nombre == "Thundurus (Therian)") {
                    $asd = 'thundurus-therian';
                }else if($p->Nombre == "Landorus (Incarnate)") {
                    $asd = 'landorus-incarnate';
                }else if($p->Nombre == "Landorus (Therian)") {
                    $asd = 'landorus-therian';
                }else if($p->Nombre == "Enamorus (Incarnate)") {
                    $asd = 'enamorus-incarnate';
                }else if($p->Nombre == "Enamorus (Therian)") {
                    $asd = 'enamorus-therian';
                }else if($p->Nombre == "Shaymin (Land)") {
                    $asd = 'shaymin-land';
                }else if($p->Nombre == "Shaymin (Sky)") {
                    $asd = 'shaymin-sky';
                } else if($p->Nombre == "Meloetta (Aria)") {
                    $asd = 'meloetta-aria';
                } else if($p->Nombre == "Meloetta (Pirouette)") {
                    $asd = 'meloetta-pirouette';
                }else if($p->Nombre == "Urshifu (Single Strike)") {
                    $asd = 'urshifu-single-strike';
                }else if($p->Nombre == "Urshifu (Rapid Strike)") {
                    $asd = 'urshifu-rapid-strike';
                }else if($p->Nombre == "Gigantamax Urshifu (Single Strike)") {
                    $asd = 'urshifu-single-strike-gmax';
                }else if($p->Nombre == "Gigantamax Urshifu (Rapid Strike)") {
                    $asd = 'urshifu-rapid-strike-gmax';
                }else if($p->Nombre == "Deoxys (Balance)") {
                    $asd = 'deoxys-normal';
                }else if($p->Nombre == "Deoxys (Attack)") {
                    $asd = 'deoxys-attack';
                }else if($p->Nombre == "Deoxys (Defense)") {
                    $asd = 'deoxys-defense';
                }else if($p->Nombre == "Deoxys (Speed)") {
                    $asd = 'deoxys-speed';
                }else if($p->Nombre == "Zygarde (10%)") {
                    $asd = 'zygarde-10';
                }else if($p->Nombre == "Zygarde (50%)") {
                    $asd = 'zygarde-50';
                }else if($p->Nombre == "Zygarde (Complete)") {
                    $asd = 'zygarde-complete';
                }else if($p->Nombre == "Giratina (Origin Form)") {
                    $asd = 'giratina-origin';
                }else if($p->Nombre == "Giratina (Altered Form)") {
                    $asd = 'giratina-altered';
                } else {
                    if(explode(' ', $p->Nombre)[0] == 'Mega' || explode(' ', $p->Nombre)[0] == 'Gigantamax') {
                        $asd = strtolower(explode(' ', $p->Nombre)[1]);
                    } else {
                        $asd = strtolower(explode(' ', $p->Nombre)[0]);
                    }
                }

                $response = Http::get('https://pokeapi.co/api/v2/pokemon/'.$asd);
                $jsonData = $response->json();

                $p->Numero = $jsonData['id'];

                $p->save();

                /*$p->Numero = $jsonData['id'];
                $p->save();*/

            }
        } catch(\Exception $e){
            dd($p, $asd);
        }
    }
}
