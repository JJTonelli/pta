@extends('layouts.layout')

@section('content')

    <div class="px-4 py-4">
        <form action="">
            <div class="row justify-content-center">
                <div class="col-sm-2">
                    <label for="">Cantidad</label>
                    <input type="number" name="cantidad" class="form-control" min="1" value="{{$cantidad}}">
                </div>
                <div class="col-sm-2">
                    <label for="">Habitat</label>
                    <select name="habitat" id="" class="form-select">
                        <option value="">Seleccionar Habitat</option>
                        @foreach($habitats as $habitat)
                            <option value="{{$habitat->HabitatID}}" @selected($habitat->HabitatID == $habitatSeleccionado)>{{$habitat->Nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="">Rareza</label>
                    <select name="" id="" class="form-select">

                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="">Tipo 1</label>
                    <select name="tipo1" id="" class="form-select">
                        <option value="">Seleccionar tipo</option>
                        @foreach($tipos as $tipo)
                            <option value="{{$tipo->TipoID}}" @selected($tipo->TipoID == $tipo1)>{{$tipo->Nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="">Tipo 2</label>
                    <select name="tipo2" id="" class="form-select">
                        <option value="">Seleccionar tipo</option>
                        @foreach($tipos as $tipo)
                            <option value="{{$tipo->TipoID}}" @selected($tipo->TipoID == $tipo2)>{{$tipo->Nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row justify-content-center mt-2">
                <div class="col-sm-2">
                    <label for="">Naturaleza</label>
                    <select name="naturaleza" id="" class="form-select">
                        <option value="">Seleccionar naturaleza</option>
                        @foreach($naturalezas as $naturaleza)
                            <option value="{{$naturaleza->NaturalezaID}}" @selected($naturaleza->NaturalezaID == $naturalezaSeleccionada)>{{$naturaleza->Nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-2 my-auto">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Incluir Legendarios
                        </label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <label for="" class="invisible">Generar Pokemones</label>
                    <button class="btn btn-primary">Generar</button>
                </div>
            </div>
        </form>

        <div class="row mt-4">
            @foreach($pokemonesCollection as $pokemon)
                <div class="col-sm-4 mb-2">
                    <div class="col-sm-12 border rounded my-4 card-pokemon" style="cursor: pointer">
                        <a href="/pokemon/{{$pokemon->Numero}}" class="text-decoration-none d-flex flex-column">
                            <img class="mx-auto" src="{{$pokemon->Imagen}}" alt="" width="200px" height="200px">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h5 class="card-title">{{$pokemon->Nombre}} #{{ $pokemon->Numero }}</h5>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-5 text-center">
                                    <img src="{{$pokemon->tipo->Imagen}}" class="" alt="..." height="15px">
                                </div>
                                @if($pokemon->tipo2)
                                    <div class="col-5 text-center">
                                        <img src="{{$pokemon->tipo2->Imagen}}" class="" alt="..." height="15px">
                                    </div>
                                @endif
                            </div>
                            <hr>
                            <div class="row my-2">
                                <div class="col-12">
                                    <span class="fs-6 fst-italic">Naturaleza: {{$pokemon->Naturaleza->Nombre}} {{$pokemon->Naturaleza->Detalles}}</span>
                                </div>
                            </div>
                            <div class="row mx-2">
                                <div class="col-4 text-center">
                                    <span>HP</span>
                                    <br>
                                    <span>{{$pokemon->HPTotal}}</span>
                                </div>
                                <div class="col-4 text-center">
                                    <span>Defensa</span>
                                    <br>
                                    <span>{{$pokemon->DefensaTotal}}</span>
                                </div>
                                <div class="col-4 text-center">
                                    <span>Defensa Especial</span>
                                    <br>
                                    <span>{{$pokemon->DefensaEspecialTotal}}</span>
                                </div>
                            </div>
                            <div class="row mx-2">
                                <div class="col-4 text-center">
                                    <span>Velocidad</span>
                                    <br>
                                    <span>{{$pokemon->VelocidadTotal}} ({{ $pokemon->VelocidadTotal * 5}} ft.)</span>
                                </div>
                                <div class="col-4 text-center">
                                    <span>Ataque</span>
                                    <br>
                                    <span>{{$pokemon->AtaqueTotal}} (+{{ floor($pokemon->AtaqueTotal / 2)}})</span>
                                </div>
                                <div class="col-4 text-center">
                                    <span>Ataque Especial</span>
                                    <br>
                                    <span>{{$pokemon->AtaqueEspecialTotal}}  (+{{ floor($pokemon->AtaqueEspecialTotal / 2)}})</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
