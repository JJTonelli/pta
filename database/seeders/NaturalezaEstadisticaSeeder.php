<?php

namespace Database\Seeders;

use App\Models\Estadistica;
use App\Models\Naturaleza;
use App\Models\NaturalezaEstadistica;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NaturalezaEstadisticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Lonely')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Ataque')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Lonely')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Ataque')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Lonely')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Defensa')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Lonely')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Defensa')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Adamant')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Ataque')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Adamant')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Ataque')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Adamant')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'AtaqueEspecial')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Adamant')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'AtaqueEspecial')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Naughty')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Ataque')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Naughty')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Ataque')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Naughty')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'DefensaEspecial')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Naughty')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'DefensaEspecial')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Brave')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Ataque')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Brave')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Ataque')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Brave')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Velocidad')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Brave')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Velocidad')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Bold')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Defensa')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Bold')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Defensa')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Bold')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Ataque')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Bold')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Ataque')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Impish')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Defensa')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Impish')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Defensa')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Impish')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'AtaqueEspecial')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Impish')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'AtaqueEspecial')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Lax')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Defensa')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Lax')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Defensa')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Lax')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'DefensaEspecial')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Lax')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'DefensaEspecial')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Relaxed')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Defensa')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Relaxed')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Defensa')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Relaxed')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Velocidad')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Relaxed')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Velocidad')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Modest')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'AtaqueEspecial')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Modest')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'AtaqueEspecial')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Modest')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Ataque')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Modest')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Ataque')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Mild')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'AtaqueEspecial')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Mild')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'AtaqueEspecial')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Mild')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Defensa')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Mild')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Defensa')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Rash')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'AtaqueEspecial')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Rash')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'AtaqueEspecial')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Rash')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'DefensaEspecial')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Rash')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'DefensaEspecial')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Quiet')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'AtaqueEspecial')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Quiet')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'AtaqueEspecial')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Quiet')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Velocidad')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Quiet')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Velocidad')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Calm')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'DefensaEspecial')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Calm')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'DefensaEspecial')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Calm')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Ataque')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Calm')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Ataque')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Gentle')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'DefensaEspecial')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Gentle')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'DefensaEspecial')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Gentle')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Defensa')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Gentle')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Defensa')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Careful')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'DefensaEspecial')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Careful')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'DefensaEspecial')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Careful')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'AtaqueEspecial')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Careful')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'AtaqueEspecial')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Sassy')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'DefensaEspecial')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Sassy')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'DefensaEspecial')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Sassy')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Velocidad')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Sassy')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Velocidad')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Timid')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Velocidad')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Timid')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Velocidad')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Timid')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Ataque')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Timid')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Ataque')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Hasty')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Velocidad')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Hasty')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Velocidad')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Hasty')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Defensa')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Hasty')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Defensa')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Jolly')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Velocidad')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Jolly')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Velocidad')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Jolly')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'AtaqueEspecial')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Jolly')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'AtaqueEspecial')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Naive')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Velocidad')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Naive')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Velocidad')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Naive')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'DefensaEspecial')->first()->EstadisticaID)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Naive')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'DefensaEspecial')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Hardy')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Ataque')->first()->EstadisticaID)->where('Valor', 1)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Hardy')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Ataque')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Hardy')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Ataque')->first()->EstadisticaID)->where('Valor', -1)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Hardy')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Ataque')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Docile')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Defensa')->first()->EstadisticaID)->where('Valor', 1)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Docile')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Defensa')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Docile')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Defensa')->first()->EstadisticaID)->where('Valor', -1)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Docile')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Defensa')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Bashful')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'AtaqueEspecial')->first()->EstadisticaID)->where('Valor', 1)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Bashful')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'AtaqueEspecial')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Bashful')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'AtaqueEspecial')->first()->EstadisticaID)->where('Valor', -1)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Bashful')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'AtaqueEspecial')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Quirky')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'DefensaEspecial')->first()->EstadisticaID)->where('Valor', 1)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Quirky')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'DefensaEspecial')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Quirky')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'DefensaEspecial')->first()->EstadisticaID)->where('Valor', -1)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Quirky')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'DefensaEspecial')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Serious')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Velocidad')->first()->EstadisticaID)->where('Valor', 1)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Serious')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Velocidad')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = 1;
            $naturalezaEstadistica->save();
        }

        $naturalezaEstadistica = NaturalezaEstadistica::where('NaturalezaID', Naturaleza::where('Nombre', 'Serious')->first()->NaturalezaID)
            ->where('EstadisticaID', Estadistica::where('Nombre', 'Velocidad')->first()->EstadisticaID)->where('Valor', -1)->first();
        if($naturalezaEstadistica == null) {
            $naturalezaEstadistica = new NaturalezaEstadistica();
            $naturalezaEstadistica->NaturalezaID = Naturaleza::where('Nombre', 'Serious')->first()->NaturalezaID;
            $naturalezaEstadistica->EstadisticaID = Estadistica::where('Nombre', 'Velocidad')->first()->EstadisticaID;
            $naturalezaEstadistica->Valor = -1;
            $naturalezaEstadistica->save();
        }

    }
}
