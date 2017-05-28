@extends('layouts.master')
@section('content')
    <div class="main-container">
        @include('layouts.partials.alerts')
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-lg-12"><h1>{{ $story->name }}</h1></div>
                <div class=""><div style="padding:20px;"><img width="700" src="{{$story->image_url}}"/></div></div>
                <div class="col-lg-12">{!! $story->description !!}</div>
                <div class="col-lg-12"><img href="{{ $story->image_url }}" /></div>
                <div class="col-lg-12">Autor: <a href="#">{{ $story->author->fullname }} <img width="32" height="32" src="{{$story->author->avatar}}"/></a></div>
                <div class="col-lg-12"></div>
            </div>
        </div>
        @if ($story->status == \App\Story::STATUS_PENDING)
            <div class="row" style="padding: 20px;">
                <span>Komentar: </span><textarea style="margin-bottom: 10px;" class="form-control"></textarea>
                <a class="btn btn-success btn-lg" style="margin-right:20px;" href="{{route('story.approve', ['id' => $story->id])}}"> Odobri </a>
                <a class="btn btn-default btn-lg" href="{{route('story.decline', ['id' => $story->id])}}"> Odbaci </a>
            </div>
        @endif;
    </div>
@stop