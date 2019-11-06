@extends('layout')

@section('layoutSite')

<div class="container">
    <div class="row">

        <div class="col-md-8">
            <div class="card" style="">
                <div class="card-body">
                    <h5 class="card-title">
                        {{$detalhes->title}}</h5>


                    @foreach($detalhes->getMedia() as $media)
                    <img src="{{asset($media->getUrl('thumb'))}}" class="img-fluid" width="500">
                    @endforeach
                    <br>
                    <br>
                    <i class="fas fa-align-right"></i>
                    <h5>Descrição do Imóvel:</h5>
                    <p class=" card-text">
                        {{$detalhes->description}}
                    </p>
                    <h5 class="card-title">
                        R$ {{$detalhes->value_properties}}</h5>

                    <i class="fas fa-map-marker-alt" size="3x"></i>
                    <h5> Localização:</h5>

                    <p class=" card-text">
                        {{$detalhes->location}}
                    </p>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Valor</h5>
                    <a href="#" class="btn btn-success"> {{$detalhes->value_properties}}</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection