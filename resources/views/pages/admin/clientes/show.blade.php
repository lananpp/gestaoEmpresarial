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
                        <p><strong>Nome:</strong> {{ $cliente['nome'] }}</p>
                        <p><strong>Email:</strong> {{ $cliente['email'] }}</p>
                        <p><strong>Telefone:</strong> {{ $cliente['telefone'] }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Empresa:</strong> {{ $cliente['empresa'] }}</p>
                        <p><strong>CNPJ:</strong> {{ $cliente['cnpj'] }}</p>
                        <p><strong>Status:</strong> 
                            <span class="status-badge status-active">{{ ucfirst($cliente['status']) }}</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Endereço -->
            <div class="admin-card mb-4">
                <h5 class="fw-semibold mb-4">Endereço</h5>
                <p>{{ $cliente['endereco'] }}</p>
            </div>
        </div>

        <div class="col-md-4">
            <!-- Estatísticas -->
            <div class="admin-card mb-4">
                <h5 class="fw-semibold mb-4">Estatísticas</h5>
                <div class="text-center">
                    <div class="stats-number">15</div>
                    <div class="stats-label">Pedidos Realizados</div>
                </div>
                <div class="text-center mt-3">
                    <div class="stats-number">R$ 8.500,00</div>
                    <div class="stats-label">Total Gasto</div>
                </div>
                <div class="text-center mt-3">
                    <div class="stats-number">3</div>
                    <div class="stats-label">Produtos Comprados</div>
                </div>
            </div>

            <!-- Informações de Acesso -->
            <div class="admin-card">
                <h5 class="fw-semibold mb-4">Último Acesso</h5>
                <p class="text-center">{{ $cliente['ultimo_acesso'] }}</p>
                <p class="text-center text-muted small">Data do cadastro: {{ date('d/m/Y', strtotime($cliente['data_cadastro'])) }}</p>
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
        <button class="btn btn-outline-azul-marinho">
            <i class="bi bi-receipt me-2"></i>Ver Pedidos
        </button>
    </div>
</div>
@endsection