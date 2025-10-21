@extends('layouts.app')

@section('title', 'Login - Gestão Empresarial')

@section('content')
<div class="min-vh-100 d-flex align-items-center justify-content-center bg-cinza-claro py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card login-card border-0">
                    <div class="login-header text-center">
                        <h3 class="fw-bold mb-0">Acesso Administrativo</h3>
                        <p class="mb-0 opacity-75">Sistema de gestão empresarial</p>
                    </div>
                    
                    <div class="card-body p-5">
                        <form method="POST" action="{{ route('login.fake') }}">
                            @csrf
                            
                            <div class="mb-4">
                                <label for="email" class="form-label fw-semibold">E-mail Administrativo</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-cinza-claro border-end-0">
                                        <i class="bi bi-envelope text-azul-marinho"></i>
                                    </span>
                                    <input type="email" class="form-control border-start-0" id="email" 
                                           name="email" placeholder="admin@empresa.com" required
                                           value="admin@empresa.com">
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
                                           value="admin123">
                                </div>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Manter conectado</label>
                            </div>

                            <button type="submit" class="btn btn-primary-custom w-100 py-2 fw-semibold">
                                <i class="bi bi-shield-lock me-2"></i>Acessar Painel Admin
                            </button>
                        </form>

                        <div class="text-center mt-4">
                            <p class="text-muted mb-0">É um cliente?</p>
                            <a href="{{ route('cadastro') }}" class="text-azul-marinho text-decoration-none fw-semibold">
                                Cadastre-se aqui
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection