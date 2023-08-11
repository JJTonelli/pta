@extends('layouts.layout')

@section('content')

    <div class="px-4 py-4">
        <div class="row justify-content-center">
            <div class="col-sm-6 text-center fw-bold">
                <span>#{{ $pokemon->Numero }} - {{ $pokemon->Nombre }}</span>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <img src="{{$pokemon->Imagen}}" alt="" width="200px" height="200px">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <img src="{{ $pokemon->tipo->Imagen }}" alt="">
                                        @if($pokemon->tipo2)
                                            <img src="{{ $pokemon->tipo2->Imagen }}" alt="">
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <span>Peso</span>
                                                <br>
                                                <span class="fst-italic">{{$pokemon->peso->Titulo}}</span>
                                                <br>
                                                <br>
                                                <span data-bs-toggle="tooltip"
                                                      data-bs-title="@foreach($pokemon->habitats as $habitat) {{$habitat->Nombre}} @if(!$loop->last), @endif @endforeach">Habitats</span>
                                                <br>
                                                <span data-bs-toggle="tooltip"
                                                      data-bs-title="@foreach($pokemon->gruposHuevo as $grupoHuevo) {{$grupoHuevo->Nombre}} @if(!$loop->last), @endif @endforeach">Grupos Huevo</span>
                                            </div>
                                            <div class="col-sm-6">
                                                <span>Tamaño</span>
                                                <br>
                                                <span class="fst-italic">{{$pokemon->tamaño->Titulo}}</span>
                                                <br>
                                                <br>
                                                <span>Dieta</span>
                                                <br>
                                                <span class="fst-italic">{{$pokemon->Dieta}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <span>Habilidades</span>
                                                @foreach($pokemon->habilidades as $habilidad)
                                                    <br>
                                                    <span class="fst-italic" data-bs-toggle="tooltip"
                                                          data-bs-title="{{$habilidad->Efecto}}">{{$habilidad->Nombre}}</span>
                                                @endforeach
                                            </div>
                                            <div class="col-sm-6">
                                                <span>Pasivas</span>
                                                @foreach($pokemon->pasivas as $pasiva)
                                                    <br>
                                                    <span class="fst-italic" data-bs-toggle="tooltip"
                                                          data-bs-title="{{$pasiva->Descripcion}}">{{$pasiva->Titulo}}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                Estadisticas
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                {{$pokemon->NaturalezaID = 2}}
                                <span class="">HP</span>
                                <br>
                                <span class="fst-italic">{{$pokemon->estadisticas->where('Nombre', 'HP')->first()->pivot->Valor}}</span>
                                <br>
                                <span class="">Ataque</span>
                                <br>
                                <span class="fst-italic">{{$pokemon->AtaqueTotal}} (+{{ floor($pokemon->AtaqueTotal / 2)}})</span>
                                <br>
                                <span class="">Defensa</span>
                                <br>
                                <span class="fst-italic">{{$pokemon->DefensaTotal}}</span>
                            </div>
                            <div class="col-sm-6">
                                <span class="">Velocidad</span>
                                <br>
                                <span
                                    class="fst-italic">{{$pokemon->VelocidadTotal}} ({{ $pokemon->VelocidadTotal * 5}} ft.)</span>
                                <br>
                                <span class="">Ataque Especial</span>
                                <br>
                                <span class="fst-italic">{{$pokemon->AtaqueEspecialTotal}} (+{{ floor($pokemon->AtaqueEspecialTotal / 2)}})</span>
                                <br>
                                <span class="">Defensa Especial</span>
                                <br>
                                <span class="fst-italic">{{$pokemon->DefensaEspecialTotal}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
