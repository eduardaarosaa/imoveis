@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12 col-sl-12">
            <div class="card">
                <div class="card-header">Ver Clientes</div>
                <div class="card-body">
                    <form action="{{route('buscaImovel')}}" method="POST">
                        @csrf
                        <div class="d-flex justify-content-center h-100">

                            <input class="form-control" type="text" name="cpf" placeholder="Search...">
                            <button type="submit" class='btn btn-success'>Pesquisar</button>
                    </form>
                </div>
                <br>
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
                            <th scope="col">Excluir</th>
                            <th scope="col">Editar</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if($result == '')

                        <p>Nenhum cliente cadastrado com esse CPF </p>

                        @else
                        <tr>
                            <th scope="row">{{$result->id_client}}</th>
                            <td>{{$result->tipo}}</td>
                            <td>{{$result->title}}</td>
                            <td>{{$result->value_properties}}</td>
                            <td>{{$result->description}}</td>
                            <td>{{$result->location}}</td>
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
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

</div>
@endsection