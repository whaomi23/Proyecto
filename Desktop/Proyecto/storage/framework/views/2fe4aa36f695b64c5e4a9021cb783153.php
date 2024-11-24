<!-- resources/views/productos/edit.blade.php -->


<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Editar Producto</h1>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('productos.update', $producto->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo e(old('nombre', $producto->nombre)); ?>">
            </div>
            <div class="mb-3">
                <label for="tienda_id" class="form-label">Tienda</label>
                <select name="tienda_id" class="form-control">
                    <?php $__currentLoopData = $tiendas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tienda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($tienda->id); ?>" <?php echo e($producto->tienda_id == $tienda->id ? 'selected' : ''); ?>><?php echo e($tienda->nombre); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="categoria_id" class="form-label">Categoría</label>
                <select name="categoria_id" class="form-control">
                    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($categoria->id); ?>" <?php echo e($producto->categoria_id == $categoria->id ? 'selected' : ''); ?>><?php echo e($categoria->nombre); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MSCOD3\Desktop\inventario\resources\views/productos/edit.blade.php ENDPATH**/ ?>