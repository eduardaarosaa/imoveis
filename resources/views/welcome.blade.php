@extends('layout')

@section('layoutSite')
<div class="container">
    <div class="col-md-12 filter">

        <br>

    </div>
    <br>
    <h3>Novidades</h3>
    <br>
    <div class="row">
        @foreach ($properties as $row)

        <div class="col-md-4">

            <div class="card" style="width: 18rem;">
                <img src="{{$row->getFirstMediaUrl()}}" width="500" height="250" class="card-img-top" alt="...">



                <div class="card-body">
                    <h5 class="card-title">
                        {{$row->title}}</h5>

                    <h5 class="card-title">
                        {{$row->value_properties}}</h5>

                    <a href="{{route('detalhesImoveis', $row->id)}}">
                        <button type="submit" class="btn btn-success">Clique aqui </button></a>


                </div>
            </div>
            <br>
        </div>
        <br>
        @endforeach
    </div>
    <br>
    <div class="col-md-12 filter">

        <br>

    </div>

    <br>
    <div class="row">
        <div class="col-md-12">
            <img src="img/banner.jpeg" width="100%">
        </div>
    </div>
    <br>
    <div class="col-md-12 filter">

        <br>

    </div>
    <div class="row">
        <div class="col-md-12">
            <p>Os melhores imóveis com os melhores preços você encontra aqui, na FB Imóveis. Conheça nosso trabalho, quer alugar?
                vender? ou comprar? Nós temos a solução para você, consulte agora um dos nossos corretores.
            </p>
            <p>Clique <a href="https://wa.me/5511984127568">AQUI</a></p>
        </div>
    </div>
</div>

</div>


@endsection