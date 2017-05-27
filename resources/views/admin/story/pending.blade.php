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
                <th>Slika</th>
                <th style="width: 150px;">Autor</th>
                <th>Akcija</th>
            </tr>
            @foreach($stories as $story)
            <tr>
                <td>{{ $story->name }}</td>
                <td class="elipsis"> {{ strip_tags($story->description) }}</td>
                <td> <img with="100" height=64" src="{{ $story->image_url }}"/></td>
                <td> {{ $story->author->fullname }}</td>
                <td> <a class="btn btn-default" href="{{route('story.details', ['id' => 1])}}">Otvori detalje</a></td>
            </tr>
            @endforeach
        </table>
    </div>
@stop