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


                                <th scope="col">Mensagem</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$mensagem->assunto}}</td>

                            </tr>

                        </tbody>
                    </table>
                    <input type="button" class="btn btn-success" value="Voltar" onClick="history.go(-1)">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection