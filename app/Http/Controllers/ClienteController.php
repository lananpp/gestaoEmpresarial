<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function create()
    {
        return view('pages.cadastro');
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'cpf' => 'required|string|unique:clientes,cpf|max:14',
            'email' => 'required|email|unique:clientes,email|max:255',
            'cep' => 'required|string|max:9',
            'logradouro' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'uf' => 'required|string|size:2',
        ]);

        // Criar o cliente no banco de dados
        Cliente::create($validated);

        // Redirecionar com mensagem de sucesso
        return redirect()->route('cadastro')
            ->with('success', 'Cliente cadastrado com sucesso!');
    }
}