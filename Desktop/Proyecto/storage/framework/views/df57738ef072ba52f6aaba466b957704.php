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


         <!-- Usamos el componente de alerta para mensajes de éxito -->
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

      <!-- Usamos el componente TableResponsive para la tabla -->
      <?php if (isset($component)) { $__componentOriginala1d6b9f636efa1b30e90177dcf950f25 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala1d6b9f636efa1b30e90177dcf950f25 = $attributes; } ?>
<?php $component = App\View\Components\TableResponsiveIndexProductos::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table-responsive-index-productos'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TableResponsiveIndexProductos::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('header', null, []); ?> 
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tienda</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
             <?php $__env->endSlot(); ?>

             <?php $__env->slot('body', null, []); ?> 
                <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($producto->id); ?></td>
                        <td><?php echo e($producto->nombre); ?></td>
                        <td><?php echo e($producto->tienda->nombre); ?></td>
                        <td><?php echo e($producto->categoria->nombre); ?></td>
                        <td>
                            <!-- Usamos el componente ActionButtons para los botones de acción -->
                            <?php if (isset($component)) { $__componentOriginalead9d9b1997400fb6ac989f84141dc93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalead9d9b1997400fb6ac989f84141dc93 = $attributes; } ?>
<?php $component = App\View\Components\AccionBotonesIndexProductos::resolve(['editRoute' => route('productos.edit', $producto->id),'deleteRoute' => route('productos.destroy', $producto->id)] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('accion-botones-index-productos'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AccionBotonesIndexProductos::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalead9d9b1997400fb6ac989f84141dc93)): ?>
<?php $attributes = $__attributesOriginalead9d9b1997400fb6ac989f84141dc93; ?>
<?php unset($__attributesOriginalead9d9b1997400fb6ac989f84141dc93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalead9d9b1997400fb6ac989f84141dc93)): ?>
<?php $component = $__componentOriginalead9d9b1997400fb6ac989f84141dc93; ?>
<?php unset($__componentOriginalead9d9b1997400fb6ac989f84141dc93); ?>
<?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala1d6b9f636efa1b30e90177dcf950f25)): ?>
<?php $attributes = $__attributesOriginala1d6b9f636efa1b30e90177dcf950f25; ?>
<?php unset($__attributesOriginala1d6b9f636efa1b30e90177dcf950f25); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala1d6b9f636efa1b30e90177dcf950f25)): ?>
<?php $component = $__componentOriginala1d6b9f636efa1b30e90177dcf950f25; ?>
<?php unset($__componentOriginala1d6b9f636efa1b30e90177dcf950f25); ?>
<?php endif; ?>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MSCOD3\Desktop\inventario\resources\views/productos/index.blade.php ENDPATH**/ ?>