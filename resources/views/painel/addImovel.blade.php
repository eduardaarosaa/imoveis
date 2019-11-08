@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar um Imóvel</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('salvandoImovel') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right cpf">ID do Cliente</label>

                            <div class="col-md-6">
                                <input id="id_cliente" type="text" class="form-control" name="id_client" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Tipo:</label>
                            <div class="col-md-4" align="center">
                                <select class="form-control" name="tipo" id="exampleFormControlSelect1">
                                    <option value="1">Venda</option>
                                    <option value="2">Aluguel</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Título</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="title" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Valor do Imóvel</label>

                            <div class="col-md-6">
                                <input id="valor_imovel" type="text" class="form-control" name="value_properties" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Descrição</label>

                            <div class="col-md-6">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Localização</label>

                            <div class="col-md-6">
                                <input id="localizacao" type="text" class="form-control" name="location" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Qnt. Quartos</label>

                            <div class="col-md-6">
                                <input id="room" type="text" class="form-control" name="room" required>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Qnt. Banheiros</label>
                            <div class="col-md-6">
                                <input id="bathroom" type="text" class="form-control" name="bathroom" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Mêtros</label>
                            <div class="col-md-6">
                                <input id="meters" type="text" class="form-control" name="meters" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Características do Imóvel:</label>
                        </div>
                        @foreach($features as $feature)
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right"></label>

                            <div class="form-check">
                                <input type="checkbox" name="feature[]" value="{{$feature->id}}"> {{$feature->name}} <br>
                                </label>
                            </div>
                        </div>
                        @endforeach

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Adicionar fotos:</label>

                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">(Máximo 6 fotos)</label>
                                    <p>Carregue sua foto</a>
                                        <i class="fas fa-upload"></i>
                                        <input type="file" name="photos[]" onchange="mostraPrev(this)" id="foto" multiple>
                                        <div class="row">
                                            <div class="col-md-12" align="center">
                                                <div id="img"></div>

                                            </div>

                                        </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" value="1" name="status">
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
<script>
    function mostraPrev(input) {
        if (input.files && input.files[0]) {
            //FileReader - lê o arquivo que foi carregado
            var reader = new FileReader();
            //e é o proprio elemento de imagem - evento 
            reader.onload = function(e) {

                //recuperando o nome desse arquivo 
                document.querySelector('#img').innerHTML = '<img width="150" src="' + e.target.result + '">';
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function() {
        $('.cpf').mask('999.999.999-99');
    });
</script>
@endsection