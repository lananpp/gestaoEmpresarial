<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login() {
        return view('pages.admin.login');
    }

    public function dashboard() {
        return view('pages.admin.dashboard');
    }

   public function clientes()
{
    // Dados fictícios de clientes
    $clientes = [
        [
            'id' => 1,
            'nome' => 'Empresa ABC Ltda',
            'email' => 'contato@empresaabc.com',
            'telefone' => '(11) 9999-8888',
            'status' => 'ativo',
            'data_cadastro' => '2024-01-15'
        ],
        [
            'id' => 2,
            'nome' => 'Comércio XYZ S/A',
            'email' => 'vendas@xyzcomercio.com',
            'telefone' => '(11) 7777-6666',
            'status' => 'ativo',
            'data_cadastro' => '2024-02-20'
        ],
        [
            'id' => 3,
            'nome' => 'Serviços 123 MEI',
            'email' => 'admin@servicos123.com',
            'telefone' => '(11) 5555-4444',
            'status' => 'inativo',
            'data_cadastro' => '2024-03-10'
        ],
        [
            'id' => 4,
            'nome' => 'Indústria Moderna',
            'email' => 'industria@moderna.com',
            'telefone' => '(11) 3333-2222',
            'status' => 'ativo',
            'data_cadastro' => '2024-01-05'
        ],
        [
            'id' => 5,
            'nome' => 'Tech Solutions',
            'email' => 'contato@techsolutions.com',
            'telefone' => '(11) 1111-0000',
            'status' => 'pendente',
            'data_cadastro' => '2024-04-01'
        ]
    ];

    return view('pages.admin.clientes.index', compact('clientes'));
}

public function clienteshow($id)
{
    // Cliente fictício baseado no ID
    $cliente = [
        'id' => $id,
        'nome' => 'Cliente ' . $id,
        'email' => 'cliente' . $id . '@empresa.com',
        'telefone' => '(11) 9999-888' . $id,
        'empresa' => 'Empresa ' . $id . ' Ltda',
        'cnpj' => '00.000.000/0001-' . str_pad($id, 2, '0', STR_PAD_LEFT),
        'endereco' => 'Rua Exemplo, 123 - Centro, São Paulo - SP',
        'status' => 'ativo',
        'data_cadastro' => '2024-01-15',
        'ultimo_acesso' => now()->subDays($id)->format('d/m/Y H:i')
    ];

    return view('pages.admin.clientes.show', compact('cliente'));
}
}
