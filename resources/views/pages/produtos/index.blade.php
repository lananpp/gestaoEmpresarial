@extends('layouts.app')

@section('title', 'Produtos - Gestão Empresarial')

@section('content')
<!-- Header -->
<div class="container-fluid bg-azul-marinho py-4 mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="text-white fw-bold mb-0">Nossos Produtos</h1>
                <p class="text-white-50 mb-0">Conheça nosso catálogo completo</p>
            </div>
            <div class="col-md-6 text-md-end">
                <div class="input-group" style="max-width: 300px; margin-left: auto;">
                    <input type="text" class="form-control" placeholder="Buscar produtos...">
                    <button class="btn btn-light" type="button">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Filtros -->
<section class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="d-flex flex-wrap gap-2">
                <button class="btn btn-outline-azul-marinho active">Todos</button>
                <button class="btn btn-outline-azul-marinho">Software</button>
                <button class="btn btn-outline-azul-marinho">Hardware</button>
                <button class="btn btn-outline-azul-marinho">Serviços</button>
            </div>
        </div>
    </div>
</section>

<!-- Grid de Produtos -->
<section class="container mb-5">
    <div class="row g-4">
        @foreach($produtos as $produto)
        <div class="col-md-6 col-lg-4">
            <div class="card card-custom h-100">
                @if($produto->imagem)
                    <img src="{{ asset('storage/' . $produto->imagem) }}" 
                         class="card-img-top" alt="{{ $produto->nome }}" 
                         style="height: 200px; object-fit: cover;">
                @else
                    <div class="card-img-top bg-light d-flex align-items-center justify-content-center" 
                         style="height: 200px;">
                        <i class="bi bi-image text-muted fs-1"></i>
                    </div>
                @endif
                <div class="card-body">
                    <span class="badge bg-primary mb-2">
                        @if($produto->preco < 100)
                            Promoção
                        @elseif($produto->preco > 500)
                            Premium
                        @else
                            Popular
                        @endif
                    </span>
                    <h5 class="card-title fw-bold">{{ $produto->nome }}</h5>
                    <p class="card-text text-muted">
                        {{ Str::limit($produto->descricao, 100) }}
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="h5 text-primary fw-bold">R$ {{ number_format($produto->preco, 2, ',', '.') }}</span>
                        <a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-primary-custom btn-sm">
                            <i class="bi bi-eye me-1"></i>Ver Detalhes
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
        @if($produtos->count() == 0)
        <div class="col-12 text-center py-5">
            <i class="bi bi-inbox display-1 text-muted"></i>
            <h3 class="text-muted mt-3">Nenhum produto cadastrado</h3>
            <p class="text-muted">Os produtos aparecerão aqui quando forem cadastrados no painel admin.</p>
        </div>
        @endif
    </div>
</section>

<!-- Paginação -->
<section class="container">
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Anterior</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Próxima</a>
            </li>
        </ul>
    </nav>
</section>
@endsection