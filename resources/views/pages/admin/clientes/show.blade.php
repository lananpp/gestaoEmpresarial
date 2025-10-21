@extends('layouts.admin')

@section('title', 'Detalhes do Cliente - Admin')
@section('page-title', 'Detalhes do Cliente')

@section('content')
<div class="admin-card">
    <div class="row">
        <div class="col-md-8">
            <!-- Informações Básicas -->
            <div class="admin-card mb-4">
                <h5 class="fw-semibold mb-4">Informações do Cliente</h5>
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Nome:</strong> {{ $cliente->nome }} {{ $cliente->sobrenome }}</p>
                        <p><strong>Email:</strong> {{ $cliente->email }}</p>
                        <p><strong>CPF:</strong> {{ $cliente->cpf }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>CEP:</strong> {{ $cliente->cep }}</p>
                        <p><strong>Status:</strong> 
                            <span class="status-badge status-active">Ativo</span>
                        </p>
                        <p><strong>Data Cadastro:</strong> {{ $cliente->created_at->format('d/m/Y') }}</p>
                    </div>
                </div>
            </div>

            <!-- Endereço -->
            <div class="admin-card mb-4">
                <h5 class="fw-semibold mb-4">Endereço</h5>
                <p>
                    {{ $cliente->logradouro }}, {{ $cliente->bairro }}<br>
                    {{ $cliente->cidade }} - {{ $cliente->uf }}<br>
                    CEP: {{ $cliente->cep }}
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <!-- Estatísticas -->
            <div class="admin-card mb-4">
                <h5 class="fw-semibold mb-4">Estatísticas</h5>
                <div class="text-center">
                    <div class="stats-number">0</div>
                    <div class="stats-label">Pedidos Realizados</div>
                </div>
                <div class="text-center mt-3">
                    <div class="stats-number">R$ 0,00</div>
                    <div class="stats-label">Total Gasto</div>
                </div>
                <div class="text-center mt-3">
                    <div class="stats-number">0</div>
                    <div class="stats-label">Produtos Comprados</div>
                </div>
            </div>

            <!-- Informações de Acesso -->
            <div class="admin-card">
                <h5 class="fw-semibold mb-4">Última Atualização</h5>
                <p class="text-center">{{ $cliente->updated_at->format('d/m/Y H:i') }}</p>
                <p class="text-center text-muted small">Cadastrado em: {{ $cliente->created_at->format('d/m/Y') }}</p>
            </div>
        </div>
    </div>

    <!-- Ações -->
    <div class="d-flex gap-2 mt-4">
        <button class="btn btn-primary-custom">
            <i class="bi bi-pencil me-2"></i>Editar Cliente
        </button>
        <button class="btn btn-outline-azul-marinho">
            <i class="bi bi-envelope me-2"></i>Enviar Email
        </button>
        <a href="{{ route('admin.clientes.index') }}" class="btn btn-outline-azul-marinho">
            <i class="bi bi-arrow-left me-2"></i>Voltar
        </a>
    </div>
</div>
@endsection