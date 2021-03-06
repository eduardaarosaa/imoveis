@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Quero um imóvel</div>
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
                                <th scope="col">Mensagem</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if(count($result) > 0 && isset($result))
                            @foreach ($result as $row)
                            <tr>

                                <td>{{$row->nome}}</td>
                                <td>{{$row->assunto}}</td>

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