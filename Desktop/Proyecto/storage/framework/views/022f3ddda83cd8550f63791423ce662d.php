<!-- resources/views/tallas/index.blade.php -->


<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Listado de Tallas</h1>
        <a href="<?php echo e(route('tallas.create')); ?>" class="btn btn-primary">Crear Talla</a>
        
        <h1></h1>
        <!-- Mensaje de Éxito -->
        <?php if (isset($component)) { $__componentOriginale24a5d9ee49c4cb17655130f0a3fd7f0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale24a5d9ee49c4cb17655130f0a3fd7f0 = $attributes; } ?>
<?php $component = App\View\Components\AlertsIndex::resolve(['type' => 'success','message' => Session::get('success')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alerts-index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AlertsIndex::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale24a5d9ee49c4cb17655130f0a3fd7f0)): ?>
<?php $attributes = $__attributesOriginale24a5d9ee49c4cb17655130f0a3fd7f0; ?>
<?php unset($__attributesOriginale24a5d9ee49c4cb17655130f0a3fd7f0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale24a5d9ee49c4cb17655130f0a3fd7f0)): ?>
<?php $component = $__componentOriginale24a5d9ee49c4cb17655130f0a3fd7f0; ?>
<?php unset($__componentOriginale24a5d9ee49c4cb17655130f0a3fd7f0); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal9dcdba1c4a8a38bfb9289ded171cac41 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9dcdba1c4a8a38bfb9289ded171cac41 = $attributes; } ?>
<?php $component = App\View\Components\TableResponsiveIndexTallas::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table-responsive-index-tallas'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TableResponsiveIndexTallas::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('header', null, []); ?> 
                <th>ID</th>
                <th>Talla</th>
                <th>Acciones</th>
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('body', null, []); ?> 
                <?php $__currentLoopData = $tallas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $talla): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($talla->id); ?></td>
                        <td><?php echo e($talla->talla); ?></td>
                        <td>
                            <a href="<?php echo e(route('tallas.show', $talla->id)); ?>" class="btn btn-info">Ver</a>
                            <a href="<?php echo e(route('tallas.edit', $talla->id)); ?>" class="btn btn-primary">Editar</a>
                            <form action="<?php echo e(route('tallas.destroy', $talla->id)); ?>" method="POST" style="display:inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9dcdba1c4a8a38bfb9289ded171cac41)): ?>
<?php $attributes = $__attributesOriginal9dcdba1c4a8a38bfb9289ded171cac41; ?>
<?php unset($__attributesOriginal9dcdba1c4a8a38bfb9289ded171cac41); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9dcdba1c4a8a38bfb9289ded171cac41)): ?>
<?php $component = $__componentOriginal9dcdba1c4a8a38bfb9289ded171cac41; ?>
<?php unset($__componentOriginal9dcdba1c4a8a38bfb9289ded171cac41); ?>
<?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MSCOD3\Desktop\inventario\resources\views/tallas/index.blade.php ENDPATH**/ ?>