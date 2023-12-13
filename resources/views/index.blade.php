@extends('layout.app', ["current" => "home"])

@section('body')

<div class="container mt-5">
    <div class="row justify-content-center">

        <!-- Card 1 -->
        <div class="card col-md-4 mx-3 border-primary">
            <div class="card-body">
                <h5 class="card-title">Cadastro de Produtos</h5>
                <p class="card-text">
                    Aqui você cadastra todos os seus produtos.
                    Só não esqueça de cadastrar previamente as categorias.
                </p>
                <a href="/produtos" class="btn btn-primary">Cadastre seus produtos</a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card col-md-4 mx-3 border-primary">
            <div class="card-body">
                <h5 class="card-title">Cadastro de Categorias</h5>
                <p class="card-text">
                    Aqui você cadastra todos os seus produtos.
                        Só não esqueça de cadastrar previamente as categorias.
                </p>
                <a href="/categorias" class="btn btn-primary">Cadastre suas categorias</a>
            </div>
        </div>
    </div>
</div>

@endsection
