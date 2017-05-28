@extends('layouts.master')
@section('content')
    <style>
        .elipsis {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3; /* number of lines to show */
            line-height: 1;        /* fallback */
            max-height: 3;       /* fallback */
        }
    </style>
    <div class="main-container">
        @include('layouts.partials.alerts')
        <table class="table table-hover">
            <tr>
                <th style="width: 200px">Naziv</th>
                <th>Kratak opis</th>
                <th style="width: 150px;">Autor</th>
                <th>Akcija</th>
            </tr>
            @foreach($tours as $tour)
            <tr>
                <td>{{ $tour->name }}</td>
                <td class="elipsis"> {{ strip_tags($tour->description) }}</td>
                <td> {{ $tour->author->fullname }}</td>
                <td> <a class="btn btn-default" href="{{route('tour.details', ['id' => $tour->id])}}">Otvori detalje</a></td>
            </tr>
            @endforeach
        </table>
    </div>
@stop