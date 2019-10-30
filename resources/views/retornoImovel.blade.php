@extends('layout')

@section('layoutSite')
<div class="container">
    <div class="row">
    </div>
    <div class="row">
        @foreach ($property as $row)


        <div class="col-md-4">

            <div class="card" style="width: 18rem;">
                <img src="https://construtoralage.com.br/wp-content/uploads/2019/08/apartamento-2-3-4-quartos.jpg" class=" card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        {{$row->title}}</h5>
                    <p class="card-text">
                        {{$row->description}}
                    </p>
                    <h5 class="card-title">
                        {{$row->value_properties}}</h5>
                    <a href="#" class="btn btn-success">Clique aqui</a>
                </div>
            </div>
            <br>
        </div>
        <br>

        @endforeach
    </div>
    <br>
    @if (isset($dataForm))

    {!! $property->appends($dataForm)->links() !!}


    @else
    {!! $property->links() !!}

    @endif

</div>

@endsection