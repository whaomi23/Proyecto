<!-- resources/views/tallas/create.blade.php -->


<?php $__env->startSection('content'); ?>
    <div class="container">
       <h1>Editar Talla</h1>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('tallas.update', $talla->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="talla" class="form-label">Talla</label>
                <!-- Mostramos la talla actual en el input -->
                <input type="text" name="talla" class="form-control" id="talla" value="<?php echo e(old('talla', $talla->talla)); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>

        <a href="<?php echo e(route('tallas.index')); ?>" class="btn btn-secondary mt-3">Cancelar</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MSCOD3\Desktop\Laravel\inventario\resources\views/tallas/edit.blade.php ENDPATH**/ ?>