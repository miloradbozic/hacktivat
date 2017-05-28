@extends('layouts.master')
@section('content')
    <style>
        .notification-list {
            margin-top:10px;
        }

        .notification-list .loader{
            background: url('../img/loader.gif') no-repeat center;
            width: 240px;
            height: 190px;
            margin: auto;
        }

        .notification-list ul {
            border-left: 2px solid black;
            margin-left:50px;
            margin-top:50px;
            list-style-type: none;
            margin-top: -20px;
            margin-bottom: 0px;
        }

        .notification-list ul:first-child {
            margin-top: 0px;
        }

        .notification-list ul li{
            position: relative;
            margin-bottom: 20px;
        }

        td.topaligned {
            padding-top: 18px !important;
        }

        .notification-list ul:first-child li:first-child{
            padding-top: 0px;
        }

        .strong {
            font-weight: bold;
        }

        .notification-list ul li.arrow-box{

            border: 1px solid #E4E4E4;
            background-color: #FFF;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .notification-list ul li.arrow-box a{
            display: block;
            padding: 20px;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
        }

        .notification-list ul li.arrow-box:after, .notification-list ul li.arrow-box:before {
            right: 100%;
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .notification-list ul li.arrow-box:after {
            border-color: rgba(213, 211, 211, 0);
            border-right-color: #F9F9F9;
            border-width: 6px;
            margin-top: -6px;
        }
        .notification-list ul li.arrow-box:before {
            border-color: rgba(194, 225, 245, 0);
            border-right-color: #c2e1f5;
            border-width: 7px;
            margin-top: -7px;
        }

        .notification-list ul li .container {
            margin-left: -94px;
            float: left;
            width: 100px;
            margin-top: 10px;
        }
        .notification-list ul li .circle {
            width: 32px;
            height: 32px;
            color: white;
            line-height: 20px;
            text-align: center;
            background: white;
            border-radius: 50%;
            box-shadow: 0 0 0 2px #D4D4D4;
            padding-top: 14px;
            margin-left: 19px;
            margin-right:0px;
        }

        .notification-list ul li .circle.red{
            background: #DA0101;
        }

        .notification-list ul li .circle.green{
            background: #3D9013;
        }
    </style>
    <?php
        $averageRating = $tour->averageRating;
    ?>
    <div class="main-container">
        @include('layouts.partials.alerts')
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-lg-12"><h1>{{ $tour->name }}</h1></div>
                <h4><span class="glyphicon glyphicon-time" aria-hidden="true"></span> {{Carbon\Carbon::parse($tour->tourSegments[0]->time)->format('d/m/Y H:i')}}</h4>
                <h4>
                    @for ($i=0; $i < (int)$averageRating; $i++)
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    @endfor
                        {{$averageRating}}
                </h4>
                <div class="row">
                    @foreach ($tour->tourSegments as $tourSegment)
                        @if ($tourSegment->story)
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                    <img style="width: 300px; height:200px" src="{{$tourSegment->story->image_url}}" alt="{{$tourSegment->story->name}}">
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="row">
                    {{$tour->description}}
                </div>
                <div class="row" style="margin-top:30px;">
                    <h4>Plan izleta:</h4>
                </div>
                <div class="row">
                    <div class="notification-list" style="margin-top:40px;">

                    <ul>
                        @foreach ($tour->tourSegments as $tourSegment)
                            <li class="header">
                                <span>{{Carbon\Carbon::parse($tourSegment->time)->format('H:i')}}</span>
                            </li>
                            <li class="arrow-box">
                                <div class="container">
                                    @if($tourSegment->story)
                                        <div class="circle green"></div>
                                    @else
                                        <div class="circle"></div>
                                    @endif

                                </div>
                                @if($tourSegment->story)
                                    <a href="{{route('story.details', ['id' => $tourSegment->story->id])}}">
                                        {{$tourSegment->description}}
                                    </a>
                                @else
                                    <a style="cursor: default;">
                                        {{$tourSegment->description}}
                                    </a>
                                @endif


                            </li>
                        @endforeach
                    </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop