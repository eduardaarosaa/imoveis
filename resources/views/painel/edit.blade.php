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
                    <form method="POST" action="{{route('alterarImovel', $property->id)}}" enctype="multipart/form-data" id="dropzoneFrom">
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
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3">{{$property->description}}</textarea>
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
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Características do Imóvel:</label>
                        </div>
                        @foreach($features as $item)
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right"></label>

                            <div class="form-check">
                                <input type="checkbox" id="division_id" name="feature[]" value="{{$item->id}}" {{ $property->features->contains($item->id) ? 'checked' : '' }} class="icheck"> {{$item->name}}
                                </label>
                            </div>
                        </div>
                        @endforeach

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Imagens do Imovel:</label>
                        </div>
                        <!-- test -->
                        <div class="row">
                        	<div class="form-group">
                                    <label for="document">Fotos</label>
                                    <div class="needsclick dropzone" id="document-dropzone">
                                        <div class="dz-message needsclick">
                                            Solte os arquivos aqui ou clique para fazer o upload.<br>
                                            <span class="note needsclick">(Após o upload das fotos e edição da ficha do imóvel, não se esqueça de clicar em "Salvar". Caso contrário, as imagens <strong>não</strong> serão válidas)</span>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- fim do  test-->
                        <div class="row">


                            @foreach($property->getMedia() as $media)


                            <div class="col-md-4">

                                <img src="{{asset($media->getUrl('thumb'))}}" class="img-fluid" id="image" width="250" height="250">
                                
                            </div>



                            @endforeach
                        </div>
                </div>

                <input type="hidden" value="1" name="status">
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-success">
                            Alterar
                        </button>
                        <a href="{{route('home')}}"> <input type="button" class="btn btn-success" value="Voltar"></a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    var uploadedDocumentMap = {}
    Dropzone.options.documentDropzone = {
        url: '{{ route('properties.storeMedia') }}',
        maxFilesize: 2, // MB
        addRemoveLinks: true,
        dictDefaultMessage: 'Solte os arquivos aqui ou clique aqui para fazer upload de uma imagem.',
        maxFiles: 20,
        thumbnailWidth: 300,
        thumbnailHeight: 300,
        acceptedFiles: "image/jpeg,image/png,image/gif",
        resizeWidth: 500,
        resizeHeight: 640,
        resizeMethod: 'contain',
        resizeQuality: 1.0,

        dictInvalidFileType: "Você não pode fazer upload de arquivos desse tipo.",
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        success: function(file, response) {
            $('form').append('<input type="hidden" name="property[]" value="' + response.name + '">')
            uploadedDocumentMap[file.name] = response.name
        },
        removedfile: function(file) {
            file.previewElement.remove()
            var name = ''
            if (typeof file.file_name !== 'undefined') {
                name = file.file_name
            } else {
                name = uploadedDocumentMap[file.name]
            }
            $('form').find('input[name="property[]"][value="' + name + '"]').remove()
        },
        init: function() {
            @if(isset($property) && $property-> media)
            var files = {
                !!json_encode($property-> getMedia('property')) !!
            }
            for (var i in files) {
                var file = files[i]
                this.options.addedfile.call(this, file)
                this.options.thumbnail.call(this, file, ' + file.file_name + ');
                    file.previewElement.classList.add('dz-complete') $('form').append('<input type="hidden" name="property[]" value="' + file.file_name + '">')
                }
                @endif
            }
        }
    
    $(function() {
        // Pré-visualização de várias imagens no navegador
        var visualizacaoImagens = function(input, lugarParaInserirVisualizacaoDeImagem) {

            if (input.files) {
                var quantImagens = input.files.length;

                for (i = 0; i < quantImagens; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img class="miniatura">')).attr('src', event.target.result).appendTo(lugarParaInserirVisualizacaoDeImagem);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#foto').on('change', function() {
            visualizacaoImagens(this, 'div.galeria');
        });
    });


    @endsection