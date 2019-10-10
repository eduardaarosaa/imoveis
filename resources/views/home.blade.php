@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Painel de controler</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card" style="width: 12rem;">
                                <div class="card-body" align="center">
                                    <span style="font-size: 3em; color:#101940;">
                                        <a href="{{route('addCliente')}}"><i class="fas fa-user-plus"></i>
                                    </span>
                                    <h5 class="card-title"> Adicionar clientes</h5></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 12rem;">
                                <div class="card-body" align="center">
                                    <span style="font-size: 3em; color:#101940;">
                                        <a href="{{route('addImovel')}}"><i class="fas fa-building"></i>
                                    </span>
                                    <h5 class="card-title">Adicionar Imóveis</h5></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 12rem;">
                                <div class="card-body" align="center">
                                    <span style="font-size: 3em; color:#101940;">
                                        <i class="fas fa-user-plus"></i>
                                    </span>
                                    <h5 class="card-title"> Adicionar clientes</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection