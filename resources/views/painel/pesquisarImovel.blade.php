@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pesquisar um imóvel</div>
                <div class="card-body">
                    <form action="{{route('buscaImovel')}}" method="POST">
                        @csrf
                        <div class="d-flex justify-content-center h-100">

                            <input class="form-control" type="text" name="cpf" placeholder="Search...">
                            <button type="submit" class='btn btn-success'>Pesquisar</button>
                    </form>
                </div>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID do cliente</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Título</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Localização</th>
                            <th scope="col">Status</th>
                            <th scope="col">Editar</th>


                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($property as $row)
                        <tr>
                            <th scope="row">{{$row->id_client}}</th>
                            <td>{{$row->tipo}}</td>
                            <td>{{$row->title}}</td>
                            <td>{{$row->value_properties}}</td>
                            <td>{{$row->description}}</td>
                            <td>{{$row->location}}</td>
                            <td>
                                <form action="apagar/{{$row->id}}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-success">Excluir</button>
                                </form>

                            </td>

                            <td>
                                <a href="{{route('properties.edit', $row->id)}}">
                                    <button type="" class="btn btn-success">Editar</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $property->links() !!}
                <a href="{{route('home')}}">
                <input type="button" class="btn btn-success" value="Voltar">
            </a>

            </div>
           
        </div>
    </div>
</div>
</div>
@endsection