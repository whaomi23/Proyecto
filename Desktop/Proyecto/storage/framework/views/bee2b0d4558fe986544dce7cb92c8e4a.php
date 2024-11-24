<!-- resources/views/productos/index.blade.php -->


<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <a href="<?php echo e(route('home')); ?>" class="btn btn-secondary btn-sm mb-3">
                    <i class="bi bi-arrow-left"></i> Volver a Home
                </a>
                <h1 class="mb-3">Listado de Productos</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="<?php echo e(route('productos.create')); ?>" class="btn btn-primary">Crear Producto</a>
            </div>
        </div>

        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <p class="mb-0"><?php echo e($message); ?></p>
            </div>
        <?php endif; ?>

        <div class="table-responsive">
            <table class="table table-striped table-hover mt-3">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Tienda</th>
                        <th>Categoría</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($producto->id); ?></td>
                            <td><?php echo e($producto->nombre); ?></td>
                            <td><?php echo e($producto->tienda->nombre); ?></td>
                            <td><?php echo e($producto->categoria->nombre); ?></td>
                            <td>
                                <a href="<?php echo e(route('productos.show', $producto->id)); ?>" class="btn btn-info btn-sm me-2">Ver</a>
                                <a href="<?php echo e(route('productos.edit', $producto->id)); ?>" class="btn btn-primary btn-sm me-2">Editar</a>
                                <form action="<?php echo e(route('productos.destroy', $producto->id)); ?>" method="POST" class="d-inline-block">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MSCOD3\Desktop\Laravel\inventario\resources\views/productos/index.blade.php ENDPATH**/ ?>