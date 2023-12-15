<?php

use Illuminate\Support\Facades\Route;
use App\Cliente;
use App\Endereco;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register weecho "<p>Rua: " . $e->rua . "</p>";
        echo "<p>Numero: " . $e->numero . "</p>";
        echo "<p>Bairro: " . $e->bairro . "</p>";
        echo "<p>Cidade: " . $e->cidade . "</p>";
        echo "<p>UF" . $e->uf . "</p>";
        echo "<p>CEP: " . $e->cep . "</p>";
        echo "<hr>";b routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clientes', function(){
    $clientes = Cliente::all();
    foreach($clientes as $c) {
        echo "<p>ID: " . $c->id . "</p>";
        echo "<p>Nome: " . $c->nome . "</p>";
        echo "<p>Telefone: " . $c->telefone . "</p>";
        
        echo "<p>Rua: " . $c->endereco->rua . "</p>";
        echo "<p>Numero: " . $c->endereco->numero . "</p>";
        echo "<p>Bairro: " . $c->endereco->bairro . "</p>";
        echo "<p>Cidade: " . $c->endereco->cidade . "</p>";
        echo "<p>UF" . $c->endereco->uf . "</p>";
        echo "<p>CEP: " . $c->endereco->cep . "</p>";
      
        echo "<hr>";

    }
    
});

Route::get('/enderecos', function(){
    $ends = Endereco::all();
    foreach($ends as $e) {
        echo "<p>ID cliente: " . $e->cliente_id . "</p>";

        echo "<p>Nome: " . $e->cliente->nome . "</p>";
        echo "<p>Telefone: " . $e->cliente->telefone . "</p>";

        echo "<p>Rua: " . $e->rua . "</p>";
        echo "<p>Numero: " . $e->numero . "</p>";
        echo "<p>Bairro: " . $e->bairro . "</p>";
        echo "<p>Cidade: " . $e->cidade . "</p>";
        echo "<p>UF" . $e->uf . "</p>";
        echo "<p>CEP: " . $e->cep . "</p>";
        echo "<hr>";

    }
    
});

Route::get('/inserir', function(){
    $c = new Cliente();
    $c->nome = "Jose Almeida";
    $c->telefone = "11 928201928";
    $c->save();

    $e = new Endereco();
    $e->rua = "@3";
    $e->numero = "23";
    $e->bairro = "Villa Almeida";
    $e->cidade = "Centro";
    $e->uf = "SP";
    $e->cep = "2213244323";
    //forma elegante de conectar as tabelas por id através da função em model
    $c->endereco()->save($e);
});

Route::get('/clientes/json', function(){
    $clientes = Cliente::all();
    return $clientes->toJson();
    
    
});
