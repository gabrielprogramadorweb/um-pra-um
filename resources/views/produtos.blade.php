@extends('layout.app', ['current' => 'produtos'])
@section('title', 'Produtos')

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de produtos</h5>
            @if (count($produtos) > 0)
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome do produto</th>
                            <th>Estoque</th>
                            <th>Preço</th>
                            <th>Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->id }}</td>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->estoque }}</td>
                                <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                                <td>
                                    @if ($produto->categoria)
                                        {{ $produto->categoria->nome }}
                                    @else
                                        Sem categoria
                                    @endif
                                </td>
                                <td>
                                    <a href="/produtos/editar/{{ $produto->id }}" class="btn btn-sm btn-primary">Editar</a>
                                    <a href="/produtos/apagar/{{ $produto->id }}" class="btn btn-sm btn-danger">Apagar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="card-footer">
            <a href="/produtos/novo" class="btn btn-sm btn-primary" role="button">Novo produto</a>
        </div>
    </div>
@endsection
