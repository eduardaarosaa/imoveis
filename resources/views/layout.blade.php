<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="img/png" href="/img/logo.png" />
    <title>Beltran Imóveis</title>

    <!-- Icones -->
    <script src="https://kit.fontawesome.com/46935bd70e.js" crossorigin="anonymous"></script>
    <style>
        .wtricks-headerbar {
            width: 100%;
            height: 100px;
            background: #FFC402;
            padding-top: 10px;
        }

        .wtricks-logo {
            width: 286px;
            height: 77px;
            margin: 0 auto;
            display: block;
            text-indent: -9999px;
            background: url('http://cdn.wtricks.com.br/images-theme/logo.png');
        }

        .wrap {
            width: 100%;
            height: 100vh;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-align-content: stretch;
            -ms-flex-line-pack: stretch;
            align-content: stretch;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .page-header,
        .page-footer {
            width: 100%;
            margin: 20px;
            text-align: center;
            /* Take careful when you use text-align center
       Bacause this affects postion of gallery navigation! I recomend you use it
       inside a container like this. */
        }

        @media (min-width: 800px) {

            .page-header,
            .page-footer {
                width: 800px;
                padding: 0;
            }
        }

        .page-header p {
            margin-top: 20px;
            font-size: .8em;
        }

        .page-footer p {
            color: #ccc;
        }

        .page-footer a {
            color: #000;
            text-decoration: none;
        }

        /* Final page style
   !!Below this line, Gallery's code starts!!*/
        /* Slideshow container */
        .gallery-container {
            width: 90%;
            position: relative;
            margin: 0 5%;
            background: #333;
            padding: 2px;
        }

        @media (min-width: 480px) {
            .gallery-container {
                width: 800px;
                margin: auto;
            }
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            background-color: rgba(0, 0, 0, 0.1);
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            width: 100%;
            text-align: center;
        }

        .imgslide {
            width: 100%;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        @media (max-width: 768px) {
            .numbertext {
                top: 15px;
            }
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }


        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }

        }
    </style>
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
    <!--Galeria-->
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <script type='text/javascript' src='/unitegallery/dist/js/unitegallery.min.js'></script>

    <link rel='stylesheet' href='/unitegallery/dist/css/unite-gallery.css' type='text/css' />
    <script type='text/javascript' src='/unitegallery/dist/themes/default/ug-theme-default.js'></script>
    <link rel='stylesheet' href='/unitegallery/dist/themes/default/ug-theme-default.css' type='text/css' />
    <link rel='stylesheet' href='/unitegallery/dist/skins/alexis/alexis.css' type='text/css' />


    <!--JQuery mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript">
        function slide1() {
            document.getElementById('id').src = "{{asset('img/01.jpg')}}";
            setTimeout("slide2()", 2000)
        }

        function slide2() {
            document.getElementById('id').src = "{{asset('img/slide04.jpeg')}}";
            setTimeout("slide3()", 2000)
        }

        function slide3() {
            document.getElementById('id').src = "{{asset('img/cats.jpg')}}";
            setTimeout("slide1()", 2000)
        }
    </script>


</head>

<body onload="slide1()">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v5.0&appId=1503017326614219&autoLogAppEvents=1"></script>
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
            <div class="row">
                <div class="col-md-12">
                    <img width="100%" id="id">
                </div>

            </div>

        </div>
    </div>



    <main class="py-4">
        @yield('layoutSite')
    </main>
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
    <script type="text/javascript">
        window.onload = function() {

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
        } <

        var slideIndex = 1;
        showSlides(slideIndex);
        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
            ga('send', 'event', 'galeria', 'next_prev', 'Titulo da página');
        }
        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }
        var slideIndex = [1, 1];
        var slideId = ["mySlides1", "mySlides2"]
        showSlides(1, 0);
        showSlides(1, 1);

        function plusSlides(n, no) {
            showSlides(slideIndex[no] += n, no);
        }


        jQuery(document).ready(function() {
            jQuery("#gallery").unitegallery();
        });
    </script>



</body>

</html>