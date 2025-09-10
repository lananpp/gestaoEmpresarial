@extends('layouts.app')

@section('title', $produto['nome'] . ' - Gestão Empresarial')

@section('content')
<div class="container py-5">
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('produtos.index') }}">Produtos</a></li>
            <li class="breadcrumb-item active">{{ $produto['nome'] }}</li>
        </ol>
    </nav>

    <div class="row">
        <!-- Imagem do Produto -->
        <div class="col-md-6">
            <div class="card card-custom p-4">
                <img src="{{ $produto['imagem'] }}" 
                     alt="{{ $produto['nome'] }}" class="img-fluid rounded-3" style="height: 400px; object-fit: cover;">
            </div>
        </div>
        
        <!-- Informações do Produto -->
        <div class="col-md-6">
            <div class="card card-custom p-4 h-100">
                <span class="badge bg-success mb-3">Disponível</span>
                <h1 class="fw-bold text-azul-marinho">{{ $produto['nome'] }}</h1>
                <p class="text-muted mb-3">Categoria: {{ $produto['categoria'] }}</p>
                
                <div class="d-flex align-items-center mb-3">
                    <span class="h3 text-azul-marinho fw-bold me-3">R$ {{ number_format($produto['preco'], 2, ',', '.') }}</span>
                    <span class="text-success fw-semibold"><i class="bi bi-tag"></i> Em promoção</span>
                </div>
                
                <p class="mb-4">
                    {{ $produto['descricao'] }}
                </p>
                
                <div class="mb-4">
                    <h5 class="fw-semibold">Características:</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle text-success me-2"></i> Alta qualidade</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i> Garantia de 12 meses</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i> Suporte técnico</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i> Entrega rápida</li>
                    </ul>
                </div>
                
                <div class="d-flex gap-3 mb-4">
                    <div class="input-group" style="width: 120px;">
                        <button class="btn btn-outline-azul-marinho">-</button>
                        <input type="text" class="form-control text-center" value="1">
                        <button class="btn btn-outline-azul-marinho">+</button>
                    </div>
                    <button class="btn btn-primary-custom flex-grow-1">
                        <i class="bi bi-cart-plus me-2"></i>Adicionar ao Carrinho
                    </button>
                </div>
                
                <div class="d-flex gap-2">
                    <button class="btn btn-outline-azul-marinho flex-fill">
                        <i class="bi bi-heart me-2"></i>Favoritar
                    </button>
                    <button class="btn btn-outline-azul-marinho flex-fill">
                        <i class="bi bi-share me-2"></i>Compartilhar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection