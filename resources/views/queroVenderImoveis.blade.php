@extends('layout')

@section('layoutSite')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h5>Informe os dados do seu imóvel que entraremos em contato</h5>
        </div>
    </div>
    <div class="row">
        <div class='col-md-12'>
            <form action="{{route('salvandoQueroVender')}}" method="POST">
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
                    <input type="text" class="form-control" name="telefone" maxlength="14" id="txt_telefone" placeholder="Digite seu telefone/Celular">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Tipo</label>
                    <select class="form-control" name="tipo" id="exampleFormControlSelect1">
                        <option>Venda</option>
                        <option>Alugue</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Região do Imóvel</label>
                    <input type="text" class="form-control" name="regiao" placeholder="Digite seu nome">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Valor do Imóvel</label>
                    <input type="text" class="form-control" name="valor" id="txt_valor" onKeyPress="return(moeda(this,'.',',',event))" placeholder="Digite seu nome">
                </div>
                <div class="form-group">
                    <label>Descrição</label>
                    <textarea class="form-control" name="assunto" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </div>
</div>

@endsection