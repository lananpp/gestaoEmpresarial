<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AdminController;

// Rotas Públicas
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sobre', [HomeController::class, 'sobre'])->name('sobre');
Route::get('/cadastro', [HomeController::class, 'cadastro'])->name('cadastro');
Route::get('/login', [HomeController::class, 'login'])->name('login');

// Rotas de Produtos
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/{id}', [ProdutoController::class, 'show'])->name('produtos.show');

// Rotas de Autenticação Fake
Route::post('/login-fake', function () {
    session(['user_logged_in' => true]);
    return redirect()->route('admin.dashboard')->with('success', 'Login realizado com sucesso!');
})->name('login.fake');

Route::post('/cadastro-fake', function () {
    session(['user_logged_in' => true]);
    return redirect()->route('admin.dashboard')->with('success', 'Cadastro realizado com sucesso!');
})->name('cadastro.fake');

Route::post('/cadastro-fake', function () {
    session(['user_logged_in' => true]);
    return redirect()->route('home')->with('success', 'Cadastro realizado com sucesso!');
})->name('cadastro.fake');

Route::post('/logout-fake', function () {
    session()->forget('user_logged_in');
    return redirect()->route('home')->with('success', 'Logout realizado!');
})->name('logout.fake');

// Rotas Administrativas (com verificação simples)
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    
    // Rota do dashboard com verificação
    Route::get('/dashboard', function () {
        if (!session('user_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Faça login primeiro!');
        }
        return app(AdminController::class)->dashboard();
    })->name('admin.dashboard');
    
    // Rotas de clientes com verificação
    Route::get('/clientes', function () {
        if (!session('user_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Faça login primeiro!');
        }
        return app(AdminController::class)->clientes();
    })->name('admin.clientes.index');
    
    Route::get('/clientes/{id}', function ($id) {
        if (!session('user_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Faça login primeiro!');
        }
        return app(AdminController::class)->clienteshow($id);
    })->name('admin.clientes.show');
});