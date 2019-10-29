@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12 col-sl-12">
            <div class="card">
                <div class="card-header">Ver Clientes</div>
                <div class="card-body">
                    <form action="{{route('buscaCliente')}}" method="POST">
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

                            <th scope="col">CPF</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Telefone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($client as $row)
                        <tr>

                            <td>{{$row->cpf}}</td>
                            <td>{{$row->nome}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->telefone}}</td>
                            <td><a href="{{route('cliente.edit', $row->id)}}">
                                    <button type="" class="btn btn-success">Editar</button></a>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $client->links() !!}
                <a href="{{route('home')}}">
                    <input type="button" class="btn btn-success" value="Voltar">
                </a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection