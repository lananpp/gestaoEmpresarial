@extends('layouts.admin')

@section('title', 'Cadastrar Produto - Admin')
@section('page-title', 'Cadastrar Novo Produto')

@section('content')
<div class="admin-card">
    <form method="POST" action="{{ route('admin.produtos.store') }}" enctype="multipart/form-data">
        @csrf
        
        <div class="row">
            <div class="col-md-8">
                <div class="mb-4">
                    <label for="nome" class="form-label fw-semibold">Nome do Produto *</label>
                    <input type="text" class="form-control" id="nome" name="nome" 
                           value="{{ old('nome') }}" required>
                    @error('nome')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="descricao" class="form-label fw-semibold">Descrição *</label>
                    <textarea class="form-control" id="descricao" name="descricao" 
                              rows="5" required>{{ old('descricao') }}</textarea>
                    @error('descricao')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="preco" class="form-label fw-semibold">Preço *</label>
                    <div class="input-group">
                        <span class="input-group-text">R$</span>
                        <input type="number" class="form-control" id="preco" name="preco" 
                               step="0.01" min="0" value="{{ old('preco') }}" required>
                    </div>
                    @error('preco')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-4">
                    <label for="imagem" class="form-label fw-semibold">Imagem do Produto *</label>
                    <input type="file" class="form-control" id="imagem" name="imagem" 
                           accept="image/*" required>
                    @error('imagem')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                    <div class="form-text">
                        Formatos: JPEG, PNG, JPG, GIF. Máx: 2MB
                    </div>
                </div>

                <div class="card bg-light p-3">
                    <h6 class="fw-semibold">Preview da Imagem</h6>
                    <div id="imagePreview" class="text-center mt-2">
                        <img id="preview" class="img-fluid rounded" 
                             style="max-height: 200px; display: none;">
                        <p class="text-muted" id="noImageText">Nenhuma imagem selecionada</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex gap-2 mt-4">
            <button type="submit" class="btn btn-primary-custom">
                <i class="bi bi-check-circle me-2"></i>Cadastrar Produto
            </button>
            <a href="{{ route('admin.produtos.index') }}" class="btn btn-outline-azul-marinho">
                <i class="bi bi-arrow-left me-2"></i>Voltar
            </a>
        </div>
    </form>
</div>

<script>
// Preview da imagem
document.getElementById('imagem').addEventListener('change', function(e) {
    const preview = document.getElementById('preview');
    const noImageText = document.getElementById('noImageText');
    
    if (this.files && this.files[0]) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
            noImageText.style.display = 'none';
        }
        
        reader.readAsDataURL(this.files[0]);
    }
});
</script>
@endsection