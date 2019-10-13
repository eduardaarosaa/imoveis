@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ver Contatos</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

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
</script>
@endsection