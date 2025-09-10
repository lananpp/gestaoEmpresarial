@extends('layouts.app')

@section('title', 'Cadastro - Gestão Empresarial')

@section('content')
<div class="min-vh-100 d-flex align-items-center justify-content-center bg-cinza-claro py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card login-card border-0">
                    <div class="login-header">
                        <h3 class="fw-bold mb-0">Crie sua conta</h3>
                        <p class="mb-0 opacity-75">Junte-se à nossa plataforma</p>
                    </div>
                    
                    <div class="card-body p-5">
                        <form method="POST" action="{{ route('cadastro.fake') }}">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="nome" class="form-label fw-semibold">Nome Completo</label>
                <div class="input-group">
                    <span class="input-group-text bg-cinza-claro border-end-0">
                        <i class="bi bi-person text-azul-marinho"></i>
                    </span>
                    <input type="text" class="form-control border-start-0" id="nome" 
                           name="nome" placeholder="Seu nome completo" required>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="empresa" class="form-label fw-semibold">Nome da Empresa</label>
                <div class="input-group">
                    <span class="input-group-text bg-cinza-claro border-end-0">
                        <i class="bi bi-building text-azul-marinho"></i>
                    </span>
                    <input type="text" class="form-control border-start-0" id="empresa" 
                           name="empresa" placeholder="Sua empresa" required>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label fw-semibold">E-mail</label>
        <div class="input-group">
            <span class="input-group-text bg-cinza-claro border-end-0">
                <i class="bi bi-envelope text-azul-marinho"></i>
            </span>
            <input type="email" class="form-control border-start-0" id="email" 
                   name="email" placeholder="seu@email.com" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="password" class="form-label fw-semibold">Senha</label>
                <div class="input-group">
                    <span class="input-group-text bg-cinza-claro border-end-0">
                        <i class="bi bi-lock text-azul-marinho"></i>
                    </span>
                    <input type="password" class="form-control border-start-0" id="password" 
                           name="password" placeholder="Sua senha" required>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="password_confirmation" class="form-label fw-semibold">Confirmar Senha</label>
                <div class="input-group">
                    <span class="input-group-text bg-cinza-claro border-end-0">
                        <i class="bi bi-lock-fill text-azul-marinho"></i>
                    </span>
                    <input type="password" class="form-control border-start-0" id="password_confirmation" 
                           name="password_confirmation" placeholder="Confirme sua senha" required>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
        <label class="form-check-label" for="terms">
            Aceito os <a href="#" class="text-azul-marinho">termos e condições</a>
        </label>
    </div>

    <button type="submit" class="btn btn-primary-custom w-100 py-2 fw-semibold">
        <i class="bi bi-person-plus me-2"></i>Criar Conta
    </button>
</form>

                        <div class="text-center mt-4">
                            <p class="text-muted mb-0">Já tem uma conta?</p>
                            <a href="{{ route('login') }}" class="text-azul-marinho text-decoration-none fw-semibold">
                                Faça login aqui
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection