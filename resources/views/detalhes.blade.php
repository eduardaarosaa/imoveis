<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="img/png" href="/img/logo.png" />
    <title>Beltran Imóveis</title>

    <!-- Icones -->
    <script src="https://kit.fontawesome.com/46935bd70e.js" crossorigin="anonymous"></script>

    <!--Css-->
    <link rel="stylesheet" type="text/css" href="/css/site/styleSite.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!--Toastr-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--JQuery mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- jQuery 1.8 or later, 33 KB -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Fotorama from CDNJS, 19 KB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>


</head>

<body>
    <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{route('welcome')}}">
                <img src="/img/logo.png" width="150">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('welcome')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('empresa')}}">Empresa</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Serviços
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('formQuerovender')}}">Venda</a>
                            <a class="dropdown-item" href="{{route('formQueroImovel')}}">Compre</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contato')}}" tabindex="-1">Contato</a>
                    </li>

                </ul>

                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="whats" href="https://wa.me/5511984127568">
                            <img src="https://imagepng.org/wp-content/uploads/2017/08/WhatsApp-icone-3.png" width="40">

                            Chame agora!!!</a>
                    </li>
                </ul>

            </div>
        </nav>

        <div class="col-md-12 filter">

            <br>

        </div>
        <div class="container">
            <br>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <form action="{{route('filtrarImovel')}}" method="POST">
                            {!! csrf_field() !!}
                            <select class="form-control" name="tipo" id="exampleFormControlSelect1">
                                <option value="1">Comprar</option>
                                <option value="2">Alugar</option>
                            </select>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <input class="button btn btn-success" type="submit" value="Pesquisar" />
                        <div class="input"><input name="regiao" class="form-control" id='regiao' type="text" placeholder="Digite cidade ou bairro" /></div>
                    </div>
                    </form>

                </div>

            </div>
            <br>
            <div class="row">

                <div class="col-md-8">
                    <div class="card" style="">
                        <div class="card-body">
                            <h5 class="card-title title">
                                {{$detalhes->title}}</h5>
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="fotorama" data-fit="cover" data-allowfullscreen="true" data-nav="thumbs" data-width="100%" data-ratio="800/600" data-minwidth="400" data-maxwidth="1000" data-minheight="300" data-maxheight="100%">
                                        @foreach($detalhes->getMedia() as $media)


                                        <img src="{{asset($media->getUrl('thumb'))}}" class="img-fluid" width="100%" height="500">


                                        @endforeach
                                    </div>
                                    <br>

                                    <br>
                                    <br>
                                    <h5 class="card-title">
                                        R$ {{$detalhes->value_properties}}</h5>

                                    <h5>Descrição do Imóvel:</h5>
                                    <p class=" card-text">
                                        {{$detalhes->description}}
                                    </p>

                                    <i class="fas fa-map-marker-alt" size="3x"></i>
                                    <h5> Localização:</h5>

                                    <p class=" card-text">
                                        {{$detalhes->location}}
                                    </p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5>Qnt. Quartos</h5>
                                            <p class=" card-text">
                                                {{$detalhes->room}}
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <h5>Qnt. Banheiros</h5>
                                            <p class=" card-text">
                                                {{$detalhes->bathroom}}
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <h5>Mêtros</h5>
                                            <p class=" card-text">
                                                {{$detalhes->meters}}
                                            </p>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>Características:</h5>
                                            <p class=" card-text">
                                                @foreach($detalhes->features as $row)
                                                <i class="fas fa-check"></i>
                                                {{$row->name}} <br>
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Valor</h5>
                            <a href="#" class="btn btn-success">R$ {{$detalhes->value_properties}}</a>
                            <br><br>

                            Quer saber mais detalhes?Chame agora!
                            <a class="whats" href="https://wa.me/5511984127568">
                                <img src="https://imagepng.org/wp-content/uploads/2017/08/WhatsApp-icone-3.png" width="30">

                            </a>


                        </div>
                    </div>
                </div>
            </div>
        </div>


        <br>
        <script type="text/javascript" src="js/app.js"></script>
        {!! toastr()->render() !!}

        <div class="col-md-12 filter">

            <br>

        </div>
        <footer class='navbar'>
            <div class="row">
                <div class='col-md-4'>
                    <img src="/img/logo.png" width="150">
                </div>
            </div>
            <div class='col-md-4'>
                <p><i class="fas fa-envelope"></i>
                    E-mail:contato@fbimoveis.com.br</p>
            </div>
    </div>
    <div class='col-md-4'>
        <p><i class="fab fa-whatsapp"></i>

            Whats: (11)0000-0000</p>
    </div>
    </div>

    </footer>

</body>

</html>