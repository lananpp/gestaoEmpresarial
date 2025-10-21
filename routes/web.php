<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;

// Rotas Públicas
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sobre', [HomeController::class, 'sobre'])->name('sobre');

// Rotas de Cadastro de Cliente (REAIS)
Route::get('/cadastro', [ClienteController::class, 'create'])->name('cadastro');
Route::post('/cadastro', [ClienteController::class, 'store'])->name('cliente.store');

// Rotas de Produtos
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/{id}', [ProdutoController::class, 'show'])->name('produtos.show');

// ========== ÚNICO LOGIN (ADMIN) ==========
Route::get('/login', [AdminController::class, 'login'])->name('login');

Route::post('/login', function () {
    session(['user_logged_in' => true]);
    return redirect()->route('admin.dashboard')->with('success', 'Login realizado com sucesso!');
})->name('login.fake');

Route::post('/logout-fake', function () {
    session()->forget('user_logged_in');
    return redirect()->route('home')->with('success', 'Logout realizado!');
})->name('logout.fake');

// Rotas Administrativas (com verificação simples)
Route::prefix('admin')->group(function () {
    // Rota do dashboard com verificação
    Route::get('/dashboard', function () {
        if (!session('user_logged_in')) {
            return redirect()->route('login')->with('error', 'Faça login primeiro!');
        }
        return app(AdminController::class)->dashboard();
    })->name('admin.dashboard');
    
    // Rotas de clientes com verificação
    Route::get('/clientes', function () {
        if (!session('user_logged_in')) {
            return redirect()->route('login')->with('error', 'Faça login primeiro!');
        }
        return app(AdminController::class)->clientes();
    })->name('admin.clientes.index');
    
    Route::get('/clientes/{id}', function ($id) {
        if (!session('user_logged_in')) {
            return redirect()->route('login')->with('error', 'Faça login primeiro!');
        }
        return app(AdminController::class)->clienteshow($id);
    })->name('admin.clientes.show');
    
    // Rotas de produtos admin
    Route::get('/produtos', function () {
        if (!session('user_logged_in')) {
            return redirect()->route('login')->with('error', 'Faça login primeiro!');
        }
        return app(AdminController::class)->produtos();
    })->name('admin.produtos.index');

    Route::get('/produtos/create', function () {
        if (!session('user_logged_in')) {
            return redirect()->route('login')->with('error', 'Faça login primeiro!');
        }
        return app(AdminController::class)->createProduto();
    })->name('admin.produtos.create');

    Route::post('/produtos', function (Request $request) {
        if (!session('user_logged_in')) {
            return redirect()->route('login')->with('error', 'Faça login primeiro!');
        }
        return app(AdminController::class)->storeProduto($request);
    })->name('admin.produtos.store');
});