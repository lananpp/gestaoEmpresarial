<div class="card product-card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
    <div class="position-relative">
        <img src="{{ $image ?? 'https://via.placeholder.com/300x200?text=Produto' }}" 
             class="card-img-top" alt="{{ $name }}" style="height: 200px; object-fit: cover;">
        <div class="position-absolute top-0 end-0 m-2">
            <span class="badge bg-success">Novo</span>
        </div>
    </div>
    <div class="card-body">
        <h5 class="card-title fw-semibold">{{ $name }}</h5>
        <p class="card-text text-muted small">{{ $description ?? 'Descrição do produto...' }}</p>
        <div class="d-flex justify-content-between align-items-center">
            <span class="h5 text-primary fw-bold">R$ {{ number_format($price ?? 99.99, 2, ',', '.') }}</span>
            <button class="btn btn-outline-primary btn-sm">
                <i class="bi bi-cart-plus"></i> Comprar
            </button>
        </div>
    </div>
</div>