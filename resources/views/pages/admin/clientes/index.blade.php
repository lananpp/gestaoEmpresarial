@extends('layouts.admin')

@section('title', 'Clientes - Admin')
@section('page-title', 'Gerenciamento de Clientes')

@section('content')
<!-- Filtros e Busca -->
<div class="admin-card mb-4">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar clientes...">
                <button class="btn btn-azul-marinho">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
        <div class="col-md-6 text-end">
            <button class="btn btn-primary-custom">
                <i class="bi bi-plus-circle me-2"></i>Novo Cliente
            </button>
        </div>
    </div>
    
    <div class="row mt-3">
        <div class="col-12">
            <div class="d-flex flex-wrap gap-2">
                <button class="btn btn-outline-azul-marinho active">Todos</button>
                <button class="btn btn-outline-azul-marinho">Ativos</button>
                <button class="btn btn-outline-azul-marinho">Inativos</button>
                <button class="btn btn-outline-azul-marinho">Premium</button>
            </div>
        </div>
    </div>
</div>

<!-- Tabela de Clientes -->
<div class="admin-card">
    <div class="table-responsive">
        <table class="table table-custom">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Contato</th>
                    <th>Status</th>
                    <th>Data Cadastro</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="bg-azul-marinho rounded-circle d-flex align-items-center justify-content-center me-3" 
                                 style="width: 40px; height: 40px;">
                                <i class="bi bi-building text-white"></i>
                            </div>
                            <div>
                                <div class="fw-semibold">{{ $cliente['nome'] }}</div>
                                <small class="text-muted">ID: CL{{ str_pad($cliente['id'], 4, '0', STR_PAD_LEFT) }}</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div>{{ $cliente['email'] }}</div>
                        <small class="text-muted">{{ $cliente['telefone'] }}</small>
                    </td>
                    <td>
                        @if($cliente['status'] == 'ativo')
                            <span class="status-badge status-active">Ativo</span>
                        @elseif($cliente['status'] == 'inativo')
                            <span class="status-badge status-inactive">Inativo</span>
                        @else
                            <span class="status-badge status-pending">Pendente</span>
                        @endif
                    </td>
                    <td>
                        {{ date('d/m/Y', strtotime($cliente['data_cadastro'])) }}
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('admin.clientes.show', $cliente['id']) }}" class="btn btn-sm btn-outline-azul-marinho" title="Visualizar">
                                <i class="bi bi-eye"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-azul-marinho" title="Editar">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger" title="Excluir">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <!-- Paginação -->
    <nav class="d-flex justify-content-between align-items-center mt-4">
        <div class="text-muted">
            Mostrando {{ count($clientes) }} clientes
        </div>
        <ul class="pagination mb-0">
            <li class="page-item disabled">
                <a class="page-link" href="#">Anterior</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Próxima</a>
            </li>
        </ul>
    </nav>
</div>
@endsection