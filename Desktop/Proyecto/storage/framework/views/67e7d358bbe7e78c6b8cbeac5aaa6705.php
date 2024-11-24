<!-- resources/views/articulos/index.blade.php -->


<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <!-- Botón de retroceso con ícono -->
                <a href="<?php echo e(route('home')); ?>" class="btn btn-secondary btn-sm mb-3">
                    <i class="bi bi-arrow-left"></i> Volver a Home
                </a>
                <h1 class="mb-3">Listado de Artículos</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="<?php echo e(route('articulos.create')); ?>" class="btn btn-primary">Crear Artículo</a>
            </div>
        </div>

        <!-- Usamos el componente de alerta para mostrar mensajes -->
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
        <?php if (isset($component)) { $__componentOriginal12be54f926cf461a08489869b48cd83d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal12be54f926cf461a08489869b48cd83d = $attributes; } ?>
<?php $component = App\View\Components\TableResponsiveIndexArticulos::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table-responsive-index-articulos'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TableResponsiveIndexArticulos::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('header', null, []); ?> 
                <tr class="text-center">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Talla</th>
                    <th>Acciones</th>
                </tr>
             <?php $__env->endSlot(); ?>

             <?php $__env->slot('body', null, []); ?> 
                <?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="text-center">
                        <td><?php echo e($articulo->id); ?></td>
                        <td><?php echo e($articulo->producto->nombre); ?></td>
                        <td><?php echo e($articulo->talla->talla ?? 'No asignada'); ?></td>
                        <td>
                            <!-- Usamos el componente Accion Botones Index para los botones de acción -->
                            <?php if (isset($component)) { $__componentOriginal6220fae4e801f9f0e1e42d6e75ca618c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6220fae4e801f9f0e1e42d6e75ca618c = $attributes; } ?>
<?php $component = App\View\Components\AccionBotonesIndexArticulos::resolve(['editRoute' => route('articulos.edit', $articulo->id),'deleteRoute' => route('articulos.destroy', $articulo->id)] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('accion-botones-index-articulos'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AccionBotonesIndexArticulos::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6220fae4e801f9f0e1e42d6e75ca618c)): ?>
<?php $attributes = $__attributesOriginal6220fae4e801f9f0e1e42d6e75ca618c; ?>
<?php unset($__attributesOriginal6220fae4e801f9f0e1e42d6e75ca618c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6220fae4e801f9f0e1e42d6e75ca618c)): ?>
<?php $component = $__componentOriginal6220fae4e801f9f0e1e42d6e75ca618c; ?>
<?php unset($__componentOriginal6220fae4e801f9f0e1e42d6e75ca618c); ?>
<?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal12be54f926cf461a08489869b48cd83d)): ?>
<?php $attributes = $__attributesOriginal12be54f926cf461a08489869b48cd83d; ?>
<?php unset($__attributesOriginal12be54f926cf461a08489869b48cd83d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal12be54f926cf461a08489869b48cd83d)): ?>
<?php $component = $__componentOriginal12be54f926cf461a08489869b48cd83d; ?>
<?php unset($__componentOriginal12be54f926cf461a08489869b48cd83d); ?>
<?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MSCOD3\Desktop\inventario\resources\views/articulos/index.blade.php ENDPATH**/ ?>