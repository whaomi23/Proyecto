

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 mb-4">
            <h2 class="text-center text-dark font-weight-bold"><?php echo e(__('Panel de Opciones')); ?></h2>
        </div>

        <!-- Card para Tiendas -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-xl hover:shadow-2xl transition-all duration-300 hover:blur-sm hover:scale-105">
                <div class="card-header bg-gradient-to-r from-blue-500 via-indigo-600 to-purple-700 text-white text-center p-4 rounded-t-xl">
                    <div class="icon-bg d-inline-block rounded-circle bg-white p-3 mb-3">
                        <i class="fas fa-store-alt fa-3x text-primary"></i>
                    </div>
                    <h5 class="card-title text-primary"><?php echo e(__('Tiendas')); ?></h5>
                </div>
                <div class="card-body text-center">
                    <p class="card-text text-muted">Administra las tiendas disponibles en el sistema.</p>
                    <a href="<?php echo e(route('tiendas.index')); ?>" class="btn btn-lg btn-outline-primary rounded-pill px-5 py-3">Ver Tiendas</a>
                </div>
            </div>
        </div>

        <!-- Card para Productos -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-xl hover:shadow-2xl transition-all duration-300 hover:blur-sm hover:scale-105">
                <div class="card-header bg-gradient-to-r from-green-500 via-teal-600 to-blue-700 text-white text-center p-4 rounded-t-xl">
                    <div class="icon-bg d-inline-block rounded-circle bg-white p-3 mb-3">
                        <i class="fas fa-cogs fa-3x text-success"></i>
                    </div>
                    <h5 class="card-title text-success"><?php echo e(__('Productos')); ?></h5>
                </div>
                <div class="card-body text-center">
                    <p class="card-text text-muted">Gestiona todos los productos y sus detalles.</p>
                    <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-lg btn-outline-success rounded-pill px-5 py-3">Ver Productos</a>
                </div>
            </div>
        </div>

        <!-- Card para Categorías -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-xl hover:shadow-2xl transition-all duration-300 hover:blur-sm hover:scale-105">
                <div class="card-header bg-gradient-to-r from-pink-500 via-red-600 to-orange-700 text-white text-center p-4 rounded-t-xl">
                    <div class="icon-bg d-inline-block rounded-circle bg-white p-3 mb-3">
                        <i class="fas fa-tags fa-3x text-danger"></i>
                    </div>
                    <h5 class="card-title text-danger"><?php echo e(__('Categorías')); ?></h5>
                </div>
                <div class="card-body text-center">
                    <p class="card-text text-muted">Organiza los productos en categorías.</p>
                    <a href="<?php echo e(route('categorias.index')); ?>" class="btn btn-lg btn-outline-danger rounded-pill px-5 py-3">Ver Categorías</a>
                </div>
            </div>
        </div>

        <!-- Card para Tallas -->
        <div class="col-md-4 mt-4">
            <div class="card shadow-lg border-0 rounded-xl hover:shadow-2xl transition-all duration-300 hover:blur-sm hover:scale-105">
                <div class="card-header bg-gradient-to-r from-cyan-500 via-blue-500 to-indigo-600 text-white text-center p-4 rounded-t-xl">
                    <div class="icon-bg d-inline-block rounded-circle bg-white p-3 mb-3">
                        <i class="fas fa-ruler-combined fa-3x text-info"></i>
                    </div>
                    <h5 class="card-title text-info"><?php echo e(__('Tallas')); ?></h5>
                </div>
                <div class="card-body text-center">
                    <p class="card-text text-muted">Define las tallas disponibles para los artículos.</p>
                    <a href="<?php echo e(route('tallas.index')); ?>" class="btn btn-lg btn-outline-info rounded-pill px-5 py-3">Ver Tallas</a>
                </div>
            </div>
        </div>

        <!-- Card para Artículos -->
        <div class="col-md-4 mt-4">
            <div class="card shadow-lg border-0 rounded-xl hover:shadow-2xl transition-all duration-300 hover:blur-sm hover:scale-105">
                <div class="card-header bg-gradient-to-r from-yellow-500 via-orange-600 to-red-700 text-white text-center p-4 rounded-t-xl">
                    <div class="icon-bg d-inline-block rounded-circle bg-white p-3 mb-3">
                        <i class="fas fa-box fa-3x text-warning"></i>
                    </div>
                    <h5 class="card-title text-warning"><?php echo e(__('Artículos')); ?></h5>
                </div>
                <div class="card-body text-center">
                    <p class="card-text text-muted">Gestiona los artículos relacionados con productos.</p>
                    <a href="<?php echo e(route('articulos.index')); ?>" class="btn btn-lg btn-outline-warning rounded-pill px-5 py-3">Ver Artículos</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MSCOD3\Desktop\Laravel\inventario\resources\views/home.blade.php ENDPATH**/ ?>