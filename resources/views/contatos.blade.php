@extends('layout')

@section('layoutSite')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h5>Como podemos te ajudar?<br> Deixe sua mensagem retornaremos o mais rápido possível</h5>
        </div>
    </div>
    <div class="row">
        <div class='col-md-12'>
            <form action="{{route('salvandoForm')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Digite seu email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Telefone</label>
                    <input type="text" class="form-control telefone" name="telefone" placeholder="Digite seu telefone/Celular">
                </div>
                <div class="form-group">
                    <label>Mensagem</label>
                    <textarea class="form-control" name="assunto" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </div>
</div>
<script>

</script>

@endsection