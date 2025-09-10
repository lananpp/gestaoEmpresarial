@extends('layouts.admin')

@section('title', 'Dashboard - Admin')
@section('page-title', 'Dashboard')

@section('content')
<!-- Stats Cards -->
<div class="row g-4 mb-4">
    <div class="col-md-3">
        <div class="admin-card stats-card">
            <div class="stats-number">1,248</div>
            <div class="stats-label">Total de Clientes</div>
            <div class="text-success small mt-2">
                <i class="bi bi-arrow-up"></i> 12% este mês
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="admin-card stats-card">
            <div class="stats-number">R$ 89,500</div>
            <div class="stats-label">Faturamento</div>
            <div class="text-success small mt-2">
                <i class="bi bi-arrow-up"></i> 8% este mês
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="admin-card stats-card">
            <div class="stats-number">324</div>
            <div class="stats-label">Pedidos Hoje</div>
            <div class="text-warning small mt-2">
                <i class="bi bi-dash"></i> 2% este mês
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="admin-card stats-card">
            <div class="stats-number">94%</div>
            <div class="stats-label">Satisfação</div>
            <div class="text-success small mt-2">
                <i class="bi bi-arrow-up"></i> 3% este mês
            </div>
        </div>
    </div>
</div>

<!-- Gráficos e Tabelas -->
<div class="row g-4">
    <div class="col-md-8">
        <div class="admin-card">
            <h5 class="fw-semibold mb-4">Vendas Mensais</h5>
            <div style="height: 300px; background: #f8f9fa; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                <p class="text-muted">Gráfico de vendas mensais aqui</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="admin-card">
            <h5 class="fw-semibold mb-4">Status de Pedidos</h5>
            <div class="d-flex flex-column gap-3">
                <div class="d-flex justify-content-between">
                    <span>Concluídos</span>
                    <span class="fw-bold text-success">45%</span>
                </div>
                <div class="progress" style="height: 8px;">
                    <div class="progress-bar bg-success" style="width: 45%"></div>
                </div>
                
                <div class="d-flex justify-content-between">
                    <span>Pendentes</span>
                    <span class="fw-bold text-warning">30%</span>
                </div>
                <div class="progress" style="height: 8px;">
                    <div class="progress-bar bg-warning" style="width: 30%"></div>
                </div>
                
                <div class="d-flex justify-content-between">
                    <span>Cancelados</span>
                    <span class="fw-bold text-danger">25%</span>
                </div>
                <div class="progress" style="height: 8px;">
                    <div class="progress-bar bg-danger" style="width: 25%"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Últimos Clientes -->
<div class="row mt-4">
    <div class="col-12">
        <div class="admin-card">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-semibold mb-0">Últimos Clientes Cadastrados</h5>
                <a href="{{ route('admin.clientes.index') }}" class="btn btn-outline-azul-marinho btn-sm">
                    Ver Todos
                </a>
            </div>
            
            <div class="table-responsive">
                <table class="table table-custom">
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Status</th>
                            <th>Cadastro</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 1; $i <= 5; $i++)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/40x40/1a365d/ffffff?text=C{{ $i }}" 
                                         class="rounded-circle me-3" alt="Cliente {{ $i }}">
                                    <div>
                                        <div class="fw-semibold">Cliente {{ $i }}</div>
                                        <small class="text-muted">Empresa {{ $i }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>cliente{{ $i }}@email.com</td>
                            <td>(11) 99999-000{{ $i }}</td>
                            <td>
                                <span class="status-badge status-active">Ativo</span>
                            </td>
                            <td>@php echo date('d/m/Y', strtotime("-{$i} days")); @endphp</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-outline-azul-marinho">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-azul-marinho">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection