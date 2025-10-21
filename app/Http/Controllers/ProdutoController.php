<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        // Buscar produtos REAIS do banco de dados
        $produtos = Produto::all();
        
        return view('pages.produtos.index', compact('produtos'));
    }

    public function show($id)
    {
        // Buscar produto REAL do banco de dados
        $produto = Produto::find($id);
        
        // Se não encontrar o produto, redireciona
        if (!$produto) {
            return redirect()->route('produtos.index')
                ->with('error', 'Produto não encontrado!');
        }

        return view('pages.produtos.show', compact('produto'));
    }
}