<!-- resources/views/tiendas/edit.blade.php -->


<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Editar Tienda</h1>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('tiendas.update', $tienda->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo e(old('nombre', $tienda->nombre)); ?>">
            </div>
            <div class="mb-3">
                <label for="ubicacion" class="form-label">Ubicación</label>
                <input type="text" name="ubicacion" class="form-control" id="ubicacion" value="<?php echo e(old('ubicacion', $tienda->ubicacion)); ?>">
            </div>
            <button type="submit" class="btn btn-success">Guardar Cambios</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MSCOD3\Desktop\inventario\resources\views/tiendas/edit.blade.php ENDPATH**/ ?>