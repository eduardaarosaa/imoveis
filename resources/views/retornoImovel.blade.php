@extends('layout')

@section('layoutSite')
<div class="container">
    <div class="row">
    </div>
    <div class="row">
        @if(empty($property) == false)

        Nenhum imóvel encontrado nesta localização

        @else

        @foreach ($property as $row)


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
        @endif
    </div>
    <br>
    @if (isset($dataForm))

    {!! $property->appends($dataForm)->links() !!}


    @else
    {!! $property->links() !!}

    @endif

</div>

@endsection