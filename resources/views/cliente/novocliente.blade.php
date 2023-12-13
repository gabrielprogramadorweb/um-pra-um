@extends('layout.app', ["current" => "novocliente"])

@section('title', 'Cadastro de Cliente')

@section('body')
<div class="row">
    <div class="container col-md-8 offset-md-2">
        <div class="card border">
            <div class="card-header">
                <div class="card-title">
                    Cadastro de Cliente
                </div>
            </div>
            <div class="card-body">
                <form action="/cliente/clientes" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome do Cliente</label>
                        <input type="text" id="nome" class="form-control" name="nome" placeholder="Nome do cliente"required>
                    </div>
                    <div class="form-group">
                        <label for="idade">Idade do Cliente</label>
                        <input type="text" id="idade" class="form-control" name="idade" placeholder="Idade do cliente" required>
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço do Cliente</label>
                        <input type="text" id="endereco" class="form-control" name="endereco" placeholder="Endereço do cliente" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail do Cliente</label>
                        <input type="text" id="email" class="form-control" name="email" placeholder="E-mail do cliente" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick="window.history.back();">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
