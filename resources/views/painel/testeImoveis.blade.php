<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="img/png" href="img/logo.png" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FB Imóveis</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->

<style>
    .dropzone .dz-preview .dz-image {
        width: 150px;
        height: 150px;
    }
</style>
    <!-- Icones -->
    <script src="https://kit.fontawesome.com/46935bd70e.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--CSS próprio -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

    <!-- Toastr -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!--Jquery Mask-->

    {{-- CSS assets in head section --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />

    {{-- ... a lot of main HTML code ... --}}

    {{-- JS assets at the bottom --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
    {{-- ...Some more scripts... --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    FB Imóveis
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastrar') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="row">
                                <div class="col-md-6">
                            <a class="dropdown-item" href="{{ route('home') }}">
                                    Menu
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </div>
                        </div>


                    

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('home') }}">
                                    Menu
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
<br>
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
                    
                    <form method="POST" action="{{route('alterarImovel', $property->id)}}" enctype="multipart/form-data" id="">
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
                        <div class="row">
                            <div class="form-group">
                                    <div class="needsclick dropzone" id="document-dropzone">
                                        <div class="dz-message needsclick">
                                           Clique para fazer o upload.<br>
                                            
                                        </div>
                                    </div>
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

{{-- JS assets at the bottom --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
{{-- ...Some more scripts... --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script>
   var uploadedDocumentMap = {}
   Dropzone.options.documentDropzone = {
     url: '{{ route('properties.storeMedia') }}',
     maxFilesize: 2, // MB
     addRemoveLinks: true,
     dictDefaultMessage : 'Solte os arquivos aqui ou clique aqui para fazer upload de uma imagem.',
     maxFiles             : 20,
     thumbnailWidth     : 150,
     thumbnailHeight    : 150,
     acceptedFiles: "image/jpeg,image/png,image/gif",
     resizeWidth: 500, 
     resizeHeight: 640,
     resizeMethod: 'contain', 
     resizeQuality: 1.0,
   
     dictInvalidFileType:  "Você não pode fazer upload de arquivos desse tipo.",
     headers: {
       'X-CSRF-TOKEN': "{{ csrf_token() }}"
     },
     success: function (file, response) {
       $('form').append('<input type="hidden" name="property[]" value="' + response.name + '">')
       uploadedDocumentMap[file.name] = response.name
     },
     removedfile: function (file) {
       file.previewElement.remove()
       var name = ''
       if (typeof file.file_name !== 'undefined') {
         name = file.file_name
       } else {
         name = uploadedDocumentMap[file.name]
       }
       $('form').find('input[name="property[]"][value="' + name + '"]').remove()
     },
     init: function () {
       @if(isset($property) && $property->media)
         var files =
           {!! json_encode($property->getMedia()) !!}
         for (var i in files) {
           var file = files[i]
           this.options.addedfile.call(this, file)
           this.options.thumbnail.call(this, file, '../storage/' + file.id + '/' + file.file_name + '');
           file.previewElement.classList.add('dz-complete')
           $('form').append('<input type="hidden" name="property[]" value="' + file.file_name + '">')
         }
       @endif
     }
   }
</script>
<script>
    
    /* 
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
    */</script>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script type="text/javascript">
        window.onload = function() {

            document.getElementById('txt_cpf').onkeypress = function() {
                if (this.value.length == 3) this.value = this.value + ".";
                if (this.value.length == 7) this.value = this.value + ".";
                if (this.value.length == 11) this.value = this.value + "-";

            }

            document.getElementById('txt_telefone').onkeypress = function() {
                if (this.value.length == 0) this.value = this.value + "(";
                if (this.value.length == 3) this.value = this.value + ")";
                if (this.value.length == 9) this.value = this.value + "-";
            }

        }

        function moeda(a, e, r, t) {
            let n = "",
                h = j = 0,
                u = tamanho2 = 0,
                l = ajd2 = "",
                o = window.Event ? t.which : t.keyCode;
            if (13 == o || 8 == o)
                return !0;
            if (n = String.fromCharCode(o),
                -1 == "0123456789".indexOf(n))
                return !1;
            for (u = a.value.length,
                h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
            ;
            for (l = ""; h < u; h++)
                -
                1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
            if (l += n,
                0 == (u = l.length) && (a.value = ""),
                1 == u && (a.value = "0" + r + "0" + l),
                2 == u && (a.value = "0" + r + l),
                u > 2) {
                for (ajd2 = "",
                    j = 0,
                    h = u - 3; h >= 0; h--)
                    3 == j && (ajd2 += e,
                        j = 0),
                    ajd2 += l.charAt(h),
                    j++;
                for (a.value = "",
                    tamanho2 = ajd2.length,
                    h = tamanho2 - 1; h >= 0; h--)
                    a.value += ajd2.charAt(h);
                a.value += r + l.substr(u - 2, u)
            }
            return !1
        }
    </script>

    <script type="text/javascript" src="js/app.js"></script>
    {!! toastr()->render() !!}



</body>

</html>