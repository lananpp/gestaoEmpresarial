@extends('layouts.app')

@section('title', 'Login - Gestão Empresarial')

@section('content')
<div class="min-vh-100 d-flex align-items-center justify-content-center bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-5">
                        <!-- Header -->
                        <div class="text-center mb-4">
                            <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                                 style="width: 60px; height: 60px;">
                                <i class="bi bi-lock-fill text-white fs-4"></i>
                            </div>
                            <h2 class="fw-bold text-dark mb-2">Bem-vindo de volta</h2>
                            <p class="text-muted">Entre na sua conta para continuar</p>
                        </div>

                        <form method="POST" action="{{ route('login.fake') }}">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label fw-semibold">E-mail</label>
        <div class="input-group">
            <span class="input-group-text bg-cinza-claro border-end-0">
                <i class="bi bi-envelope text-azul-marinho"></i>
            </span>
            <input type="email" class="form-control border-start-0" id="email" 
                   name="email" placeholder="seu@email.com" required
                   value="demo@empresa.com">
        </div>
    </div>

    <div class="mb-4">
        <label for="password" class="form-label fw-semibold">Senha</label>
        <div class="input-group">
            <span class="input-group-text bg-cinza-claro border-end-0">
                <i class="bi bi-lock text-azul-marinho"></i>
            </span>
            <input type="password" class="form-control border-start-0" id="password" 
                   name="password" placeholder="Sua senha" required
                   value="senha123">
        </div>
        <div class="form-text text-end">
            <a href="#" class="text-azul-marinho text-decoration-none">Esqueceu a senha?</a>
        </div>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="remember" name="remember">
        <label class="form-check-label" for="remember">Lembrar-me</label>
    </div>

    <button type="submit" class="btn btn-primary-custom w-100 py-2 fw-semibold">
        <i class="bi bi-box-arrow-in-right me-2"></i>Entrar
    </button>
</form>

                        <!-- Divisor -->
                        <div class="text-center my-4">
                            <span class="text-muted">ou</span>
                        </div>

                        <!-- Redes Sociais -->
                        <div class="row g-2 mb-4">
                            <div class="col">
                                <button class="btn btn-outline-secondary w-100 rounded-3">
                                    <i class="bi bi-google me-2"></i>Google
                                </button>
                            </div>
                            <div class="col">
                                <button class="btn btn-outline-secondary w-100 rounded-3">
                                    <i class="bi bi-facebook me-2"></i>Facebook
                                </button>
                            </div>
                        </div>

                        <!-- Cadastro -->
                        <div class="text-center">
                            <p class="text-muted mb-0">Não tem uma conta?</p>
                            <a href="{{ route('cadastro') }}" class="text-decoration-none fw-semibold">
                                Cadastre-se agora
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection