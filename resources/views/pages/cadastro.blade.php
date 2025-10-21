@extends('layouts.app')

@section('title', 'Cadastro - Gestão Empresarial')

@section('content')
<div class="min-vh-100 d-flex align-items-center justify-content-center bg-cinza-claro py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card login-card border-0">
                    <div class="login-header">
                        <h3 class="fw-bold mb-0">Cadastro de Cliente</h3>
                        <p class="mb-0 opacity-75">Preencha seus dados abaixo</p>
                    </div>
                    
                    <div class="card-body p-5">
                        <form method="POST" action="{{ route('cliente.store') }}">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nome" class="form-label fw-semibold">Nome *</label>
                                        <input type="text" class="form-control" id="nome" name="nome" 
                                               value="{{ old('nome') }}" required>
                                        @error('nome')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="sobrenome" class="form-label fw-semibold">Sobrenome *</label>
                                        <input type="text" class="form-control" id="sobrenome" name="sobrenome" 
                                               value="{{ old('sobrenome') }}" required>
                                        @error('sobrenome')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="cpf" class="form-label fw-semibold">CPF *</label>
                                        <input type="text" class="form-control" id="cpf" name="cpf" 
                                               value="{{ old('cpf') }}" placeholder="000.000.000-00" required>
                                        @error('cpf')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label fw-semibold">E-mail *</label>
                                        <input type="email" class="form-control" id="email" name="email" 
                                               value="{{ old('email') }}" required>
                                        @error('email')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Seção de Endereço com ViaCEP -->
                            <div class="border-top pt-4 mt-4">
                                <h5 class="fw-semibold text-azul-marinho mb-3">Endereço</h5>
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="cep" class="form-label fw-semibold">CEP *</label>
                                            <input type="text" class="form-control" id="cep" name="cep" 
                                                   value="{{ old('cep') }}" placeholder="00000-000" required>
                                            @error('cep')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="logradouro" class="form-label fw-semibold">Logradouro *</label>
                                            <input type="text" class="form-control" id="logradouro" name="logradouro" 
                                                   value="{{ old('logradouro') }}" required>
                                            @error('logradouro')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="bairro" class="form-label fw-semibold">Bairro *</label>
                                            <input type="text" class="form-control" id="bairro" name="bairro" 
                                                   value="{{ old('bairro') }}" required>
                                            @error('bairro')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="cidade" class="form-label fw-semibold">Cidade *</label>
                                            <input type="text" class="form-control" id="cidade" name="cidade" 
                                                   value="{{ old('cidade') }}" required>
                                            @error('cidade')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label for="uf" class="form-label fw-semibold">UF *</label>
                                            <input type="text" class="form-control" id="uf" name="uf" 
                                                   value="{{ old('uf') }}" maxlength="2" required>
                                            @error('uf')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary-custom w-100 py-2 fw-semibold mt-3">
                                <i class="bi bi-person-plus me-2"></i>Cadastrar Cliente
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

<!-- JavaScript para ViaCEP -->
<script>
document.getElementById('cep').addEventListener('blur', function() {
    const cep = this.value.replace(/\D/g, '');
    
    if (cep.length !== 8) {
        alert('CEP deve conter 8 dígitos');
        return;
    }

    // Mostrar loading
    this.disabled = true;

    fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then(response => response.json())
        .then(data => {
            if (data.erro) {
                alert('CEP não encontrado');
                return;
            }

            // Preencher os campos automaticamente
            document.getElementById('logradouro').value = data.logradouro || '';
            document.getElementById('bairro').value = data.bairro || '';
            document.getElementById('cidade').value = data.localidade || '';
            document.getElementById('uf').value = data.uf || '';
        })
        .catch(error => {
            console.error('Erro ao buscar CEP:', error);
            alert('Erro ao buscar CEP. Tente novamente.');
        })
        .finally(() => {
            this.disabled = false;
        });
});

// Máscara para CPF
document.getElementById('cpf').addEventListener('input', function() {
    let value = this.value.replace(/\D/g, '');
    if (value.length > 11) value = value.substring(0, 11);
    
    if (value.length > 9) {
        value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
    } else if (value.length > 6) {
        value = value.replace(/(\d{3})(\d{3})(\d{3})/, '$1.$2.$3');
    } else if (value.length > 3) {
        value = value.replace(/(\d{3})(\d{3})/, '$1.$2');
    }
    
    this.value = value;
});

// Máscara para CEP
document.getElementById('cep').addEventListener('input', function() {
    let value = this.value.replace(/\D/g, '');
    if (value.length > 8) value = value.substring(0, 8);
    
    if (value.length > 5) {
        value = value.replace(/(\d{5})(\d{3})/, '$1-$2');
    }
    
    this.value = value;
});
</script>
@endsection