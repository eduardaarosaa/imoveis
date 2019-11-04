@extends('layout')

@section('layoutSite')

<div class="container">
    <div class="row">

        <div class="col-md-4">

            <div class="card-body">
                <h5 class="card-title">
                    {{$detalhes->title}}</h5>
                <img src="http://imoveis.test/storage/20/casa1.jpg?v=1572749909" width="500">
                <p class=" card-text">
                    {{$detalhes->description}}
                </p>
                <h5 class="card-title">
                    {{$detalhes->value_properties}}</h5>

            </div>
        </div>

        @endsection