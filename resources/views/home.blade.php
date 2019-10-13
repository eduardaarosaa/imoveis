@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Painel de controler</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card" style="width: 12rem;">
                                <div class="card-body" align="center">
                                    <span style="font-size: 3em; color:#101940;">
                                        <a href="{{route('addCliente')}}"><i class="fas fa-user-plus"></i>
                                    </span>
                                    <h5 class="card-title"> Adicionar clientes</h5></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 12rem;">
                                <div class="card-body" align="center">
                                    <span style="font-size: 3em; color:#101940;">
                                        <a href="{{route('consultaClientes')}}"><i class="fas fa-search"></i>
                                    </span>
                                    <h5 class="card-title"> Pesquisar cliente</h5></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 12rem;">
                                <div class="card-body" align="center">
                                    <span style="font-size: 3em; color:#101940;">
                                        <a href="{{route('addImovel')}}"><i class="fas fa-building"></i>
                                    </span>
                                    <h5 class="card-title">Adicionar Imóveis</h5></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 12rem;">
                                <div class="card-body" align="center">
                                    <span style="font-size: 3em; color:#101940;">
                                        <a href="{{route('verContatos')}}"><i class="fas fa-envelope-open-text"></i>
                                    </span>
                                    <h5 class="card-title">Ver contatos</h5></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col-md-3">
                            <div class="card" style="width: 12rem;">
                                <div class="card-body" align="center">
                                    <span style="font-size: 3em; color:#101940;">
                                        <a href="{{route('pesquisarImovel')}}"><i class="fas fa-search"></i>
                                    </span>
                                    <h5 class="card-title"> Pesquisar Imóveis</h5></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 12rem;">
                                <div class="card-body" align="center">
                                    <span style="font-size: 3em; color:#101940;">
                                        <a href="{{route('queroImovel')}}"><i class="fas fa-home"></i>
                                    </span>
                                    <h5 class="card-title">Quero um imóvel</h5></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 12rem;">
                                <div class="card-body" align="center">
                                    <span style="font-size: 3em; color:#101940;">
                                        <a href="{{route('venderImovel')}}"><i class="far fa-smile-wink"></i>
                                    </span>
                                    <h5 class="card-title">Vender um imóvel</h5></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 12rem;">
                                <div class="card-body" align="center">
                                    <span style="font-size: 3em; color:#101940;">
                                        <a href="#"><i class="fas fa-tools"></i>
                                    </span>
                                    <h5 class="card-title">Configurações</h5></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection