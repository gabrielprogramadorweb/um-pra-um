<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Produto;
use Illuminate\Http\Request;

class ControladorProduto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::with('categoria')->get();
        return view('produtos', compact('produtos'));
    }

    public function showForm()
    {
        $categorias = Categoria::all();
        return view('novoproduto', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('novoproduto', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->input('nomeProduto');
        $produto->estoque = $request->input('estoque');
        $produto->preco = $request->input('preco');

        // Verifique se categoria_id está presente no request e não é nulo
        if ($request->has('categoria_id') && $request->input('categoria_id') !== null) {
            $produto->categoria_id = $request->input('categoria_id');
        } else {
            // Trate a situação em que categoria_id não está presente ou é nulo
            // Pode ser útil redirecionar de volta ao formulário com uma mensagem de erro
            return redirect('/produtos')->with('error', 'Categoria é obrigatória.');
        }

        $produto->save();

        return redirect('/produtos');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::find($id);

        // Recupere também as categorias, se necessário
        $categorias = Categoria::all();

        // Passe as variáveis para a visão
        return view('editarproduto', compact('produto', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prod = Produto::find($id);
        if(isset($prod)) {
            $prod->nome = $request->input('nomeProduto');
            $prod->estoque = $request->input('estoque');
            $prod->preco = $request->input('preco');
            $prod->categoria_id = $request->input('categoria_id');
            $prod->save();
        }
        return redirect('/produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = Produto::find($id);
        if (isset($prod)) {
            $prod->delete();
        }
        return redirect('/produtos');
    }
}
