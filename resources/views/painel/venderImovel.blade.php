@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Quero vender um imóvel</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table">
                        <thead>

                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Região</th>
                                <th scope="col">Valor</th>

                            </tr>

                        </thead>
                        <tbody>
                            @if(count($result) > 0 && isset($result))
                            @foreach ($result as $row)
                            <tr>

                                <td><a href="{{route('visualizar', $row->id)}}">{{$row->nome}}</a></td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->telefone}}</td>
                                <td>{{$row->tipo}}</td>
                                <td>{{$row->regiao}}</td>
                                <td>{{$row->valor}}</td>

                                <td><input type="button" class="btn btn-success" value="Apagar"></td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="7">Nenhum item Cadastrado</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    <input type="button" class="btn btn-success" value="Voltar" onClick="history.go(-1)">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection