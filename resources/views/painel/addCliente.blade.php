@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar um cliente</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('cadastrado') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="text" div="cpf" class="col-md-4 col-form-label text-md-right cpf">CPF</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control cpf" maxlength="14" id="txt_cpf" name="cpf" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="nome" value="{{ old('name') }}" required>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Telefone</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control" id="txt_telefone" name="telefone" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    Cadastrar
                                </button>
                                <input type="button" class="btn btn-success" value="Voltar" onClick="history.go(-1)">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection