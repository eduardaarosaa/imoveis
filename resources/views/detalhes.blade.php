@extends('layout')

@section('layoutSite')

<div class="container">
    <div class="row">

        <div class="col-md-4">

            <div class="card-body">
                <h5 class="card-title">
                    {{$detalhes->title}}</h5>


                @foreach($detalhes->getMedia() as $media)
                <img src="{{asset($media->getUrl('thumb'))}}" width="500">
                @endforeach

                <p class=" card-text">
                    {{$detalhes->description}}
                </p>
                <h5 class="card-title">
                    {{$detalhes->value_properties}}</h5>

            </div>
        </div>

        @endsection