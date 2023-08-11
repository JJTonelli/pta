@extends('layouts.layout')

@section('content')
    <style>
        .card-pokemon:hover {
            box-shadow: 5px 5px 9px -7px rgba(0, 0, 0, 0.32);
            -webkit-box-shadow: 5px 5px 9px -7px rgba(0, 0, 0, 0.32);
            -moz-box-shadow: 5px 5px 9px -7px rgba(0, 0, 0, 0.32);
        }
    </style>

    @livewire('pokemon.pokemon-listado')

    @section('scripts')
        {{--        <script>
                    $(".card-pokemon").on("mouseover", function () {
                        $(this).toggleClass('shadow-sm')
                        //stuff to do on mouseover
                    });
                </script>--}}
    @endsection
@endsection
