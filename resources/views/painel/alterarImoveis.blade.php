@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Alterar imóvel</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="<?php echo route('alterarImovel', $property->id) ?>" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right cpf">ID do Cliente</label>

                            <div class="col-md-6">
                                <input id="txt_cpf" value="{{$property->id_client}}" type="text" class="form-control" name="id_client" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Tipo:</label>
                            <div class="col-md-4" align="center">
                                <select class="form-control" name="tipo" value="{{$property->tipo}}" id="exampleFormControlSelect1">
                                    <option value="1">Venda</option>
                                    <option value="2">Aluguel</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Título</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" value="{{$property->title}}" name="title" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Valor do Imóvel</label>

                            <div class="col-md-6">
                                <input id="valor_imovel" type="text" value="{{$property->value_properties}}" class="form-control" name="value_properties" onkeypress="return(moeda(this,'.',',',event))" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Descrição</label>

                            <div class="col-md-6">
                                <textarea class="form-control" value="{{$property->description}}" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Localização</label>

                            <div class="col-md-6">
                                <input id="localizacao" type="text" class="form-control" value="{{$property->location}}" name="location" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Qnt. Quartos</label>

                            <div class="col-md-6">
                                <input id="room" type="text" class="form-control" value="{{$property->room}}" name="room" required>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Qnt. Banheiros</label>
                            <div class="col-md-6">
                                <input id="bathroom" type="text" class="form-control" value="{{$property->bathroom}}" name="bathroom" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Mêtros</label>
                            <div class="col-md-6">
                                <input id="meters" type="text" class="form-control" value="{{$property->meters}}" name="meters" required>
                            </div>
                        </div>

                        <input type="hidden" value="1" name="status">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    Alterar
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
        var i = 0;
        for (i = 0; < input.files.length; i++) {
            if (input.files && input.files[i]) {
                //FileReader - lê o arquivo que foi carregado
                var reader = new FileReader();
                //e é o proprio elemento de imagem - evento 
                reader.onload = function(e) {

                    modalHTML = "<img src='" + e.target.result + "'/>";
                    //recuperando o nome desse arquivo 
                    document.querySelector('#img').insertAdjacentHTML("beforeend", modalHTML);



                }

                reader.readAsDataURL(input.files[i])
            }
        }
    }
    $(document).ready(function() {
        $('.cpf').mask('999.999.999-99');
    });
</script>
@endsection