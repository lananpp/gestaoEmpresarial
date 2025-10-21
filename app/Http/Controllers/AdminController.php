<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login() {
        return view('pages.login'); // Agora usa a mesma página de login
    }

    public function dashboard() {
        return view('pages.admin.dashboard');
    }

    public function clientes()
    {
        // Buscar clientes REAIS do banco de dados
        $clientes = Cliente::all();
        
        return view('pages.admin.clientes.index', compact('clientes'));
    }

    public function clienteshow($id)
    {
        // Buscar cliente REAL do banco de dados
        $cliente = Cliente::find($id);
        
        // Se não encontrar o cliente, redireciona
        if (!$cliente) {
            return redirect()->route('admin.clientes.index')
                ->with('error', 'Cliente não encontrado!');
        }

        return view('pages.admin.clientes.show', compact('cliente'));
    }

    public function produtos()
    {
        // Buscar produtos REAIS do banco de dados
        $produtos = Produto::all();
        
        return view('pages.admin.produtos.index', compact('produtos'));
    }

    public function createProduto()
    {
        return view('pages.admin.produtos.create');
    }

    public function storeProduto(Request $request)
    {
        // Validação dos dados
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric|min:0',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Upload da imagem
        if ($request->hasFile('imagem')) {
            $imagePath = $request->file('imagem')->store('produtos', 'public');
            $validated['imagem'] = $imagePath;
        }

        // Criar produto no banco de dados
        Produto::create($validated);

        return redirect()->route('admin.produtos.index')
            ->with('success', 'Produto cadastrado com sucesso!');
    }
}