@extends('layouts.admin')

@section('title', 'Produtos - Admin')
@section('page-title', 'Gerenciamento de Produtos')

@section('content')
<!-- Cabeçalho com Botão -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h1 class="h3 fw-bold text-azul-marinho mb-0">Produtos</h1>
        <p class="text-muted mb-0">Gerencie os produtos do catálogo</p>
    </div>
    <a href="{{ route('admin.produtos.create') }}" class="btn btn-primary-custom">
        <i class="bi bi-plus-circle me-2"></i>Novo Produto
    </a>
</div>

<!-- Tabela de Produtos -->
<div class="admin-card">
    <div class="table-responsive">
        <table class="table table-custom">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            @if($produto->imagem)
                                <img src="{{ asset('storage/' . $produto->imagem) }}" 
                                     class="rounded me-3" 
                                     style="width: 50px; height: 50px; object-fit: cover;">
                            @else
                                <div class="bg-secondary rounded d-flex align-items-center justify-content-center me-3" 
                                     style="width: 50px; height: 50px;">
                                    <i class="bi bi-image text-white"></i>
                                </div>
                            @endif
                            <div>
                                <div class="fw-semibold">{{ $produto->nome }}</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="text-truncate" style="max-width: 200px;">
                            {{ $produto->descricao }}
                        </div>
                    </td>
                    <td>
                        <span class="fw-bold text-success">R$ {{ number_format($produto->preco, 2, ',', '.') }}</span>
                    </td>
                    <td>
                        {{ $produto->created_at->format('d/m/Y') }}
                    </td>
                    <td>
                        <div class="btn-group">
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
</div>
@endsection