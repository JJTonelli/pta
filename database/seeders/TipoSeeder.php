<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipo;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tipo = Tipo::where('Nombre', 'Steel')->first();
        if($tipo == null) {
            $tipo = new Tipo;
            $tipo->Nombre = 'Steel';
            $tipo->Color = '#60a3b9';
            $tipo->Imagen = 'https://images.wikidexcdn.net/mwuploads/wikidex/thumb/5/52/latest/20221208180543/Tipo_acero_EP.png/80px-Tipo_acero_EP.png';
            $tipo->Icono = 'https://images.wikidexcdn.net/mwuploads/wikidex/6/6c/latest/20230128124521/Tipo_acero_icono_EP.svg';
            $tipo->save();
        }

        $tipo = Tipo::where('Nombre', 'Water')->first();
        if($tipo == null) {
            $tipo = new Tipo;
            $tipo->Nombre = 'Water';
            $tipo->Color = '#2c81ef';
            $tipo->Imagen = 'https://images.wikidexcdn.net/mwuploads/wikidex/thumb/5/59/latest/20221208180426/Tipo_agua_EP.png/80px-Tipo_agua_EP.png';
            $tipo->Icono = 'https://images.wikidexcdn.net/mwuploads/wikidex/d/d6/latest/20230128124702/Tipo_agua_icono_EP.svg';
            $tipo->save();
        }

        $tipo = Tipo::where('Nombre', 'Bug')->first();
        if($tipo == null) {
            $tipo = new Tipo;
            $tipo->Nombre = 'Bug';
            $tipo->Color = '#92a310';
            $tipo->Imagen = 'https://images.wikidexcdn.net/mwuploads/wikidex/thumb/5/5d/latest/20221208180434/Tipo_bicho_EP.png/80px-Tipo_bicho_EP.png';
            $tipo->Icono = 'https://images.wikidexcdn.net/mwuploads/wikidex/1/1a/latest/20230128124809/Tipo_bicho_icono_EP.svg';
            $tipo->save();
        }

        $tipo = Tipo::where('Nombre', 'Dragon')->first();
        if($tipo == null) {
            $tipo = new Tipo;
            $tipo->Nombre = 'Dragon';
            $tipo->Color = '#4f5fe2';
            $tipo->Imagen = 'https://images.wikidexcdn.net/mwuploads/wikidex/thumb/b/b8/latest/20221208180443/Tipo_drag%C3%B3n_EP.png/80px-Tipo_drag%C3%B3n_EP.png';
            $tipo->Icono = 'https://images.wikidexcdn.net/mwuploads/wikidex/1/15/latest/20230128124905/Tipo_drag%C3%B3n_icono_EP.svg';
            $tipo->save();
        }

        $tipo = Tipo::where('Nombre', 'Electric')->first();
        if($tipo == null) {
            $tipo = new Tipo;
            $tipo->Nombre = 'Electric';
            $tipo->Color = '#fac000';
            $tipo->Imagen = 'https://images.wikidexcdn.net/mwuploads/wikidex/thumb/3/38/latest/20221208180452/Tipo_el%C3%A9ctrico_EP.png/80px-Tipo_el%C3%A9ctrico_EP.png';
            $tipo->Icono = 'https://images.wikidexcdn.net/mwuploads/wikidex/8/84/latest/20230128125008/Tipo_el%C3%A9ctrico_icono_EP.svg';
            $tipo->save();
        }

        $tipo = Tipo::where('Nombre', 'Ghost')->first();
        if($tipo == null) {
            $tipo = new Tipo;
            $tipo->Nombre = 'Ghost';
            $tipo->Color = '#70416f';
            $tipo->Imagen = 'https://images.wikidexcdn.net/mwuploads/wikidex/thumb/0/03/latest/20221208180503/Tipo_fantasma_EP.png/80px-Tipo_fantasma_EP.png';
            $tipo->Icono = 'https://images.wikidexcdn.net/mwuploads/wikidex/3/3d/latest/20230128125103/Tipo_fantasma_icono_EP.svg';
            $tipo->save();
        }

        $tipo = Tipo::where('Nombre', 'Fire')->first();
        if($tipo == null) {
            $tipo = new Tipo;
            $tipo->Nombre = 'Fire';
            $tipo->Color = '#e62324';
            $tipo->Imagen = 'https://images.wikidexcdn.net/mwuploads/wikidex/thumb/c/c0/latest/20221208180625/Tipo_fuego_EP.png/80px-Tipo_fuego_EP.png';
            $tipo->Icono = 'https://images.wikidexcdn.net/mwuploads/wikidex/5/55/latest/20230128125153/Tipo_fuego_icono_EP.svg';
            $tipo->save();
        }

        $tipo = Tipo::where('Nombre', 'Fairy')->first();
        if($tipo == null) {
            $tipo = new Tipo;
            $tipo->Nombre = 'Fairy';
            $tipo->Color = '#ef71ef';
            $tipo->Imagen = 'https://images.wikidexcdn.net/mwuploads/wikidex/thumb/9/97/latest/20221208180633/Tipo_hada_EP.png/80px-Tipo_hada_EP.png';
            $tipo->Icono = 'https://images.wikidexcdn.net/mwuploads/wikidex/b/b7/latest/20230128125233/Tipo_hada_icono_EP.svg';
            $tipo->save();
        }

        $tipo = Tipo::where('Nombre', 'Ice')->first();
        if($tipo == null) {
            $tipo = new Tipo;
            $tipo->Nombre = 'Ice';
            $tipo->Color = '#3cd9ff';
            $tipo->Imagen = 'https://images.wikidexcdn.net/mwuploads/wikidex/thumb/1/17/latest/20221208180641/Tipo_hielo_EP.png/80px-Tipo_hielo_EP.png';
            $tipo->Icono = 'https://images.wikidexcdn.net/mwuploads/wikidex/a/a6/latest/20230128125423/Tipo_hielo_icono_EP.svg';
            $tipo->save();
        }

        $tipo = Tipo::where('Nombre', 'Fighting')->first();
        if($tipo == null) {
            $tipo = new Tipo;
            $tipo->Nombre = 'Fighting';
            $tipo->Color = '#fc8102';
            $tipo->Imagen = 'https://images.wikidexcdn.net/mwuploads/wikidex/thumb/5/5f/latest/20221208180651/Tipo_lucha_EP.png/80px-Tipo_lucha_EP.png';
            $tipo->Icono = 'https://images.wikidexcdn.net/mwuploads/wikidex/f/f2/latest/20230128125518/Tipo_lucha_icono_EP.svg';
            $tipo->save();
        }

        $tipo = Tipo::where('Nombre', 'Normal')->first();
        if($tipo == null) {
            $tipo = new Tipo;
            $tipo->Nombre = 'Normal';
            $tipo->Color = '#a0a2a1';
            $tipo->Imagen = 'https://images.wikidexcdn.net/mwuploads/wikidex/thumb/9/99/latest/20221208180705/Tipo_normal_EP.png/80px-Tipo_normal_EP.png';
            $tipo->Icono = 'https://images.wikidexcdn.net/mwuploads/wikidex/c/c3/latest/20230128125621/Tipo_normal_icono_EP.svg';
            $tipo->save();
        }

        $tipo = Tipo::where('Nombre', 'Grass')->first();
        if($tipo == null) {
            $tipo = new Tipo;
            $tipo->Nombre = 'Grass';
            $tipo->Color = '#3fa128';
            $tipo->Imagen = 'https://images.wikidexcdn.net/mwuploads/wikidex/thumb/a/a7/latest/20221208180710/Tipo_planta_EP.png/80px-Tipo_planta_EP.png';
            $tipo->Icono = 'https://images.wikidexcdn.net/mwuploads/wikidex/e/ed/latest/20230128125654/Tipo_planta_icono_EP.svg';
            $tipo->save();
        }

        $tipo = Tipo::where('Nombre', 'Psychic')->first();
        if($tipo == null) {
            $tipo = new Tipo;
            $tipo->Nombre = 'Psychic';
            $tipo->Color = '#ef4179';
            $tipo->Imagen = 'https://images.wikidexcdn.net/mwuploads/wikidex/thumb/9/9b/latest/20221208180717/Tipo_ps%C3%ADquico_EP.png/80px-Tipo_ps%C3%ADquico_EP.png';
            $tipo->Icono = 'https://images.wikidexcdn.net/mwuploads/wikidex/2/22/latest/20230128125735/Tipo_ps%C3%ADquico_icono_EP.svg';
            $tipo->save();
        }

        $tipo = Tipo::where('Nombre', 'Rock')->first();
        if($tipo == null) {
            $tipo = new Tipo;
            $tipo->Nombre = 'Rock';
            $tipo->Color = '#b1ab82';
            $tipo->Imagen = 'https://images.wikidexcdn.net/mwuploads/wikidex/thumb/8/88/latest/20221208180726/Tipo_roca_EP.png/80px-Tipo_roca_EP.png';
            $tipo->Icono = 'https://images.wikidexcdn.net/mwuploads/wikidex/1/14/latest/20230128125805/Tipo_roca_icono_EP.svg';
            $tipo->save();
        }

        $tipo = Tipo::where('Nombre', 'Dark')->first();
        if($tipo == null) {
            $tipo = new Tipo;
            $tipo->Nombre = 'Dark';
            $tipo->Color = '#50413f';
            $tipo->Imagen = 'https://images.wikidexcdn.net/mwuploads/wikidex/thumb/d/de/latest/20221208180734/Tipo_siniestro_EP.png/80px-Tipo_siniestro_EP.png';
            $tipo->Icono = 'https://images.wikidexcdn.net/mwuploads/wikidex/e/e0/latest/20230128132504/Tipo_siniestro_icono_EP.svg';
            $tipo->save();
        }

        $tipo = Tipo::where('Nombre', 'Ground')->first();
        if($tipo == null) {
            $tipo = new Tipo;
            $tipo->Nombre = 'Ground';
            $tipo->Color = '#92501c';
            $tipo->Imagen = 'https://images.wikidexcdn.net/mwuploads/wikidex/thumb/c/c9/latest/20221208180742/Tipo_tierra_EP.png/80px-Tipo_tierra_EP.png';
            $tipo->Icono = 'https://images.wikidexcdn.net/mwuploads/wikidex/c/c8/latest/20230128132625/Tipo_tierra_icono_EP.svg';
            $tipo->save();
        }

        $tipo = Tipo::where('Nombre', 'Poison')->first();
        if($tipo == null) {
            $tipo = new Tipo;
            $tipo->Nombre = 'Poison';
            $tipo->Color = '#923fcd';
            $tipo->Imagen = 'https://images.wikidexcdn.net/mwuploads/wikidex/thumb/1/11/latest/20221208180751/Tipo_veneno_EP.png/80px-Tipo_veneno_EP.png';
            $tipo->Icono = 'https://images.wikidexcdn.net/mwuploads/wikidex/f/fa/latest/20230128132735/Tipo_veneno_icono_EP.svg';
            $tipo->save();
        }

        $tipo = Tipo::where('Nombre', 'Flying')->first();
        if($tipo == null) {
            $tipo = new Tipo;
            $tipo->Nombre = 'Flying';
            $tipo->Color = '#82baef';
            $tipo->Imagen = 'https://images.wikidexcdn.net/mwuploads/wikidex/thumb/9/9a/latest/20221208180800/Tipo_volador_EP.png/80px-Tipo_volador_EP.png';
            $tipo->Icono = 'https://images.wikidexcdn.net/mwuploads/wikidex/6/6b/latest/20230128132815/Tipo_volador_icono_EP.svg';
            $tipo->save();
        }

        $tipo = Tipo::where('Nombre', 'Varia')->first();
        if($tipo == null) {
            $tipo = new Tipo;
            $tipo->Nombre = 'Varia';
            $tipo->save();
        }

        $tipo = Tipo::where('Nombre', 'Shadow')->first();
        if($tipo == null) {
            $tipo = new Tipo;
            $tipo->Nombre = 'Shadow';
            $tipo->save();
        }

    }
}
