<div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-xl hover:shadow-2xl transition-all duration-300 hover:blur-sm hover:scale-105">
                <div class="card-header bg-gradient-to-r from-green-500 via-teal-600 to-blue-700 text-white text-center p-4 rounded-t-xl">
                    <div class="icon-bg d-inline-block rounded-circle bg-white p-3 mb-3">
                        <i class="fas fa-cogs fa-3x text-success"></i>
                    </div>
                    <h5 class="card-title text-success">{{ __('Productos') }}</h5>
                </div>
                <div class="card-body text-center">
                    <p class="card-text text-muted">Gestiona todos los productos y sus detalles.</p>
                    <a href="{{ route('productos.index') }}" class="btn btn-lg btn-outline-success rounded-pill px-5 py-3">Ver Productos</a>
                </div>
            </div>
</div>
