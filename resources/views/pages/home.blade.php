@extends('layouts.app')

@section('title', 'Home - Gestão Empresarial')

@section('content')
<!-- Hero Section -->
<section class="hero-section mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">Sistema de Gestão Empresarial</h1>
                <p class="lead mb-4">Gerencie sua empresa de forma eficiente com nossa plataforma completa e intuitiva.</p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="{{ route('produtos.index') }}" class="btn btn-light btn-lg rounded-pill px-4">
                        <i class="bi bi-grid me-2"></i>Ver Produtos
                    </a>
                    <a href="{{ route('cadastro') }}" class="btn btn-outline-light btn-lg rounded-pill px-4">
                        <i class="bi bi-person-plus me-2"></i>Começar Agora
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=500&h=400&fit=crop&auto=format" 
                     alt="Dashboard" class="img-fluid rounded-3 shadow">
            </div>
        </div>
    </div>
</section>

<!-- Navegação Rápida -->
<section class="container mb-5">
    <div class="row text-center mb-4">
        <div class="col-12">
            <h2 class="fw-bold text-azul-marinho">Acesse Rapidamente</h2>
            <p class="text-muted">Navegue pelas principais áreas do sistema</p>
        </div>
    </div>
    
    <div class="row g-4">
        <div class="col-md-3">
            <a href="{{ route('produtos.index') }}" class="card card-custom h-100 text-center p-4 text-decoration-none">
                <div class="bg-azul-marinho rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                     style="width: 70px; height: 70px;">
                    <i class="bi bi-grid text-white fs-4"></i>
                </div>
                <h5 class="fw-bold text-azul-marinho">Produtos</h5>
                <p class="text-muted small">Veja nosso catálogo completo</p>
            </a>
        </div>
        
        <div class="col-md-3">
            <a href="{{ route('sobre') }}" class="card card-custom h-100 text-center p-4 text-decoration-none">
                <div class="bg-azul-marinho rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                     style="width: 70px; height: 70px;">
                    <i class="bi bi-info-circle text-white fs-4"></i>
                </div>
                <h5 class="fw-bold text-azul-marinho">Sobre Nós</h5>
                <p class="text-muted small">Conheça nossa empresa</p>
            </a>
        </div>
        
        <div class="col-md-3">
            <a href="{{ route('login') }}" class="card card-custom h-100 text-center p-4 text-decoration-none">
                <div class="bg-azul-marinho rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                     style="width: 70px; height: 70px;">
                    <i class="bi bi-box-arrow-in-right text-white fs-4"></i>
                </div>
                <h5 class="fw-bold text-azul-marinho">Login</h5>
                <p class="text-muted small">Acesse sua conta</p>
            </a>
        </div>
        
        <div class="col-md-3">
            <a href="{{ route('cadastro') }}" class="card card-custom h-100 text-center p-4 text-decoration-none">
                <div class="bg-azul-marinho rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                     style="width: 70px; height: 70px;">
                    <i class="bi bi-person-plus text-white fs-4"></i>
                </div>
                <h5 class="fw-bold text-azul-marinho">Cadastro</h5>
                <p class="text-muted small">Crie sua conta</p>
            </a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="container mb-5">
    <div class="row text-center mb-5">
        <div class="col-12">
            <h2 class="fw-bold text-azul-marinho">Recursos Principais</h2>
            <p class="text-muted">Tudo que você precisa para gerenciar seu negócio</p>
        </div>
    </div>
    
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card card-custom h-100 text-center p-4">
                <div class="bg-azul-marinho rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                     style="width: 80px; height: 80px;">
                    <i class="bi bi-box-seam text-white fs-3"></i>
                </div>
                <h4 class="fw-bold">Gestão de Produtos</h4>
                <p class="text-muted">Controle completo do seu inventário e catálogo de produtos</p>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card card-custom h-100 text-center p-4">
                <div class="bg-azul-marinho rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                     style="width: 80px; height: 80px;">
                    <i class="bi bi-people text-white fs-3"></i>
                </div>
                <h4 class="fw-bold">Gestão de Clientes</h4>
                <p class="text-muted">Gerencie seu relacionamento com clientes de forma eficiente</p>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card card-custom h-100 text-center p-4">
                <div class="bg-azul-marinho rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                     style="width: 80px; height: 80px;">
                    <i class="bi bi-graph-up text-white fs-3"></i>
                </div>
                <h4 class="fw-bold">Relatórios</h4>
                <p class="text-muted">Relatórios detalhados para análise e tomada de decisão</p>
            </div>
        </div>
    </div>
</section>

<!-- Produtos em Destaque -->
<section class="container mb-5">
    <div class="row justify-content-between align-items-center mb-4">
        <div class="col-md-6">
            <h2 class="fw-bold text-azul-marinho">Destaques do Catálogo</h2>
            <p class="text-muted">Conheça nossos produtos mais populares</p>
        </div>
        <div class="col-md-6 text-md-end">
            <a href="{{ route('produtos.index') }}" class="btn btn-outline-azul-marinho">
                Ver Catálogo Completo <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
    
    <div class="row g-4">
        @php
            $produtosDestaque = \App\Models\Produto::latest()->take(3)->get();
        @endphp
        
        @foreach($produtosDestaque as $produto)
        <div class="col-md-4">
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
                        {{ Str::limit($produto->descricao, 80) }}
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
        
        @if($produtosDestaque->count() == 0)
        <div class="col-12 text-center py-4">
            <p class="text-muted">Nenhum produto cadastrado ainda.</p>
            <a href="{{ route('login') }}" class="btn btn-primary-custom">
                <i class="bi bi-plus-circle me-2"></i>Cadastrar Primeiro Produto
            </a>
        </div>
        @endif
    </div>
</section>

<!-- Seção Call-to-Action -->
<section class="bg-azul-marinho py-5 mt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h3 class="text-white fw-bold mb-3">Pronto para começar?</h3>
                <p class="text-white-50 mb-0">Acesse o sistema e comece a gerenciar sua empresa hoje mesmo.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                @if(session('user_logged_in'))
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-light btn-lg">
                        <i class="bi bi-speedometer2 me-2"></i>Acessar Painel
                    </a>
                @else
                    <a href="{{ route('cadastro') }}" class="btn btn-light btn-lg me-3">
                        <i class="bi bi-person-plus me-2"></i>Cadastrar
                    </a>
                    <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-box-arrow-in-right me-2"></i>Fazer Login
                    </a>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection