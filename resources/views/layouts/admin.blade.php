<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Gestão Empresarial - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-brand">
            <h4 class="fw-bold mb-0">
                <i class="bi bi-building"></i> Admin
            </h4>
            <small class="text-muted">Gestão Empresarial</small>
        </div>

        <div class="sidebar-menu">
            <a href="{{ route('admin.dashboard') }}" class="sidebar-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
            <a href="{{ route('admin.clientes.index') }}" class="sidebar-item {{ request()->is('admin/clientes*') ? 'active' : '' }}">
                <i class="bi bi-people"></i> Clientes
            </a>
            <a href="{{ route('admin.produtos.index') }}" class="sidebar-item {{ request()->is('admin/produtos*') ? 'active' : '' }}">
                <i class="bi bi-box-seam"></i> Produtos
            </a>
            <a href="#" class="sidebar-item">
                <i class="bi bi-cash-coin"></i> Vendas
            </a>
            <a href="#" class="sidebar-item">
                <i class="bi bi-graph-up"></i> Relatórios
            </a>
        </div>

        <div class="sidebar-menu mt-5">
            <a href="{{ route('home') }}" class="sidebar-item">
                <i class="bi bi-house"></i> Site Principal
            </a>
            <form method="POST" action="{{ route('logout.fake') }}">
                @csrf
                <button type="submit" class="sidebar-item w-100 text-start border-0 bg-transparent text-white">
                    <i class="bi bi-box-arrow-right"></i> Sair
                </button>
            </form>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Bar -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 fw-bold text-azul-marinho">@yield('page-title')</h1>
            <div class="d-flex align-items-center gap-3">
                <div class="dropdown">
                    <button class="btn btn-outline-azul-marinho dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-danger">3</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Nova mensagem</a></li>
                        <li><a class="dropdown-item" href="#">Pedido realizado</a></li>
                        <li><a class="dropdown-item" href="#">Sistema atualizado</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="btn btn-outline-azul-marinho dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle me-2"></i>Admin
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li><a class="dropdown-item" href="#">Configurações</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout.fake') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Sair</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Content -->
        @yield('content')
    </div>
</body>
</html>