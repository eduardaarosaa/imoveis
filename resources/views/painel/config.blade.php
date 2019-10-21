@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Configurações</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <p>Extrair a base dos clientes em excel </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{route('export')}}"><button type="button" class="btn btn-success">Extrair</button></a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="button" class="btn btn-success" value="Voltar" onClick="history.go(-1)">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection