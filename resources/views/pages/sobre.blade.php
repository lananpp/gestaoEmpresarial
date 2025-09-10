@extends('layouts.app')

@section('title', 'Sobre - Gestão Empresarial')

@section('content')
<!-- Hero Section -->
<section class="hero-section mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">Sobre Nós</h1>
                <p class="lead mb-4">Conheça mais sobre nossa plataforma e nossa missão de transformar a gestão empresarial.</p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=500&h=400&fit=crop&auto=format" 
                     alt="Sobre Nós" class="img-fluid rounded-3 shadow">
            </div>
        </div>
    </div>
</section>

<!-- Nossa Missão -->
<section class="container mb-5">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=500&h=400&fit=crop&auto=format" 
                 alt="Nossa Missão" class="img-fluid rounded-3 shadow">
        </div>
        <div class="col-lg-6">
            <h2 class="fw-bold text-azul-marinho mb-4">Nossa Missão</h2>
            <p class="text-muted mb-4">
                Nossa missão é simplificar a gestão empresarial através de tecnologia inovadora e intuitiva. 
                Acreditamos que toda empresa merece ter acesso às melhores ferramentas para crescer e se desenvolver.
            </p>
            <div class="d-flex gap-3 flex-wrap">
                <span class="badge badge-custom">Inovação</span>
                <span class="badge badge-custom">Simplicidade</span>
                <span class="badge badge-custom">Eficiência</span>
                <span class="badge badge-custom">Qualidade</span>
            </div>
        </div>
    </div>
</section>

<!-- Valores -->
<section class="bg-cinza-claro py-5 mb-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="fw-bold text-azul-marinho">Nossos Valores</h2>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card card-custom text-center p-4">
                    <div class="bg-azul-marinho rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                         style="width: 80px; height: 80px;">
                        <i class="bi bi-lightbulb text-white fs-3"></i>
                    </div>
                    <h5 class="fw-bold">Inovação</h5>
                    <p class="text-muted">Buscamos sempre as melhores soluções tecnológicas para nossos clientes.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card card-custom text-center p-4">
                    <div class="bg-azul-marinho rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                         style="width: 80px; height: 80px;">
                        <i class="bi bi-heart text-white fs-3"></i>
                    </div>
                    <h5 class="fw-bold">Qualidade</h5>
                    <p class="text-muted">Comprometidos com a excelência em todos os nossos serviços.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card card-custom text-center p-4">
                    <div class="bg-azul-marinho rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                         style="width: 80px; height: 80px;">
                        <i class="bi bi-people text-white fs-3"></i>
                    </div>
                    <h5 class="fw-bold">Clientes</h5>
                    <p class="text-muted">Nossos clientes são o centro de tudo o que fazemos.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Estatísticas -->
<section class="container mb-5">
    <div class="row text-center">
        <div class="col-md-3">
            <h3 class="fw-bold text-azul-marinho display-4">500+</h3>
            <p class="text-muted">Clientes Satisfeitos</p>
        </div>
        <div class="col-md-3">
            <h3 class="fw-bold text-azul-marinho display-4">1K+</h3>
            <p class="text-muted">Produtos Gerenciados</p>
        </div>
        <div class="col-md-3">
            <h3 class="fw-bold text-azul-marinho display-4">99%</h3>
            <p class="text-muted">Uptime Garantido</p>
        </div>
        <div class="col-md-3">
            <h3 class="fw-bold text-azul-marinho display-4">24/7</h3>
            <p class="text-muted">Suporte Disponível</p>
        </div>
    </div>
</section>
@endsection