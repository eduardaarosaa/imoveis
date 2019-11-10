@extends('layout')

@section('layoutSite')

<div class="container">
    <div class="row">

        <div class="col-md-8">
            <div class="card" style="">
                <div class="card-body">
                    <h5 class="card-title title">
                        {{$detalhes->title}}</h5>
                    <div class="row">
                        <div class="col-md-12">
                            @foreach($detalhes->getMedia() as $media)

                            <img src="{{asset($media->getUrl('thumb'))}}" class="img-fluid" width="500">
                            @endforeach
                        </div>

                    </div>

                    <br>
                    <br>
                    <h5 class="card-title">
                        R$ {{$detalhes->value_properties}}</h5>

                    <h5>Descrição do Imóvel:</h5>
                    <p class=" card-text">
                        {{$detalhes->description}}
                    </p>

                    <i class="fas fa-map-marker-alt" size="3x"></i>
                    <h5> Localização:</h5>

                    <p class=" card-text">
                        {{$detalhes->location}}
                    </p>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Qnt. Quartos</h5>
                            <p class=" card-text">
                                {{$detalhes->room}}
                            </p>
                        </div>
                        <div class="col-md-4">
                            <h5>Qnt. Banheiros</h5>
                            <p class=" card-text">
                                {{$detalhes->bathroom}}
                            </p>
                        </div>
                        <div class="col-md-4">
                            <h5>Mêtros</h5>
                            <p class=" card-text">
                                {{$detalhes->meters}}
                            </p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Características:</h5>
                            <p class=" card-text">
                                @foreach($detalhes->features as $row)
                                <i class="fas fa-check"></i>
                                {{$row->name}} <br>
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Valor</h5>
                    <a href="#" class="btn btn-success">R$ {{$detalhes->value_properties}}</a>
                    <br><br>

                    Quer saber mais detalhes?Chame agora!
                    <a class="whats" href="https://wa.me/5511984127568">
                        <img src="https://imagepng.org/wp-content/uploads/2017/08/WhatsApp-icone-3.png" width="30">

                    </a>


                </div>
            </div>
        </div>
    </div>
</div>


@endsection