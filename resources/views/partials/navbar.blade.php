<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            <i class="bi bi-building me-2"></i>GestãoEmpresarial
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="bi bi-house me-1"></i>Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('produtos*') ? 'active' : '' }}" href="{{ route('produtos.index') }}">
                        <i class="bi bi-grid me-1"></i>Produtos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('sobre') ? 'active' : '' }}" href="{{ route('sobre') }}">
                        <i class="bi bi-info-circle me-1"></i>Sobre
                    </a>
                </li>
                
                <!-- Link para o painel admin (só aparece se estiver logado) -->
                @if(session('user_logged_in'))
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin*') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                        <i class="bi bi-speedometer2 me-1"></i>Painel Admin
                    </a>
                </li>
                @endif
            </ul>
            
            <div class="d-flex gap-2">
                @if(session('user_logged_in'))
                    <!-- Se ESTIVER logado: mostra botão de Painel e Logout -->
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-light btn-sm">
                        <i class="bi bi-speedometer2 me-1"></i>Painel Admin
                    </a>
                    <form method="POST" action="{{ route('logout.fake') }}">
                        @csrf
                        <button type="submit" class="btn btn-light btn-sm">
                            <i class="bi bi-box-arrow-right me-1"></i>Sair
                        </button>
                    </form>
                @else
                    <!-- Se NÃO ESTIVER logado: mostra apenas botão de Login Admin e Cadastro -->
                    <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm">
                        <i class="bi bi-shield-lock me-1"></i>Login Admin
                    </a>
                    <a href="{{ route('cadastro') }}" class="btn btn-light btn-sm">
                        <i class="bi bi-person-plus me-1"></i>Cadastrar
                    </a>
                @endif
            </div>
        </div>
    </div>
</nav>