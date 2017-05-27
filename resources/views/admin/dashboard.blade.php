@extends('layouts.master')
@section('content')
    <div class="main-container">

        @include('layouts.partials.alerts')

        @foreach($stories as $story)
        <div class="row">
            <h3>{{$story->name}}</h3>
            <img with="200" height="200" src="{{$story->image_url}}"/>
            <div>{!! $story->description !!}</div>
        </div>
        @endforeach
    </div>
@stop