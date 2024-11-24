<!-- resources/views/tiendas/index.blade.php -->


<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <a href="<?php echo e(route('home')); ?>" class="btn btn-secondary btn-sm mb-3">
                    <i class="bi bi-arrow-left"></i> Volver a Home
                </a>
                <h1 class="mb-3">Listado de Tiendas</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="<?php echo e(route('tiendas.create')); ?>" class="btn btn-primary">Crear Tienda</a>
            </div>
        </div>

        <!-- Usamos el componente Alert para mostrar mensajes de éxito -->
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
        <?php if (isset($component)) { $__componentOriginalc2130ebadde88d86aba8f0939cc63413 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2130ebadde88d86aba8f0939cc63413 = $attributes; } ?>
<?php $component = App\View\Components\TableResponsiveIndexTiendas::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table-responsive-index-tiendas'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TableResponsiveIndexTiendas::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('header', null, []); ?> 
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Ubicación</th>
                    <th>Acciones</th>
                </tr>
             <?php $__env->endSlot(); ?>

             <?php $__env->slot('body', null, []); ?> 
                <?php $__currentLoopData = $tiendas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tienda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($tienda->id); ?></td>
                        <td><?php echo e($tienda->nombre); ?></td>
                        <td><?php echo e($tienda->ubicacion); ?></td>
                        <td>
                            <!-- Usamos el componente ActionButtons para los botones de acción -->
                            <?php if (isset($component)) { $__componentOriginal6c0429067fecf49665ba418669d2453e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6c0429067fecf49665ba418669d2453e = $attributes; } ?>
<?php $component = App\View\Components\AccionBotonesIndexTiendas::resolve(['editRoute' => route('tiendas.edit', $tienda->id),'deleteRoute' => route('tiendas.destroy', $tienda->id)] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('accion-botones-index-tiendas'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AccionBotonesIndexTiendas::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6c0429067fecf49665ba418669d2453e)): ?>
<?php $attributes = $__attributesOriginal6c0429067fecf49665ba418669d2453e; ?>
<?php unset($__attributesOriginal6c0429067fecf49665ba418669d2453e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6c0429067fecf49665ba418669d2453e)): ?>
<?php $component = $__componentOriginal6c0429067fecf49665ba418669d2453e; ?>
<?php unset($__componentOriginal6c0429067fecf49665ba418669d2453e); ?>
<?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2130ebadde88d86aba8f0939cc63413)): ?>
<?php $attributes = $__attributesOriginalc2130ebadde88d86aba8f0939cc63413; ?>
<?php unset($__attributesOriginalc2130ebadde88d86aba8f0939cc63413); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2130ebadde88d86aba8f0939cc63413)): ?>
<?php $component = $__componentOriginalc2130ebadde88d86aba8f0939cc63413; ?>
<?php unset($__componentOriginalc2130ebadde88d86aba8f0939cc63413); ?>
<?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MSCOD3\Desktop\inventario\resources\views/tiendas/index.blade.php ENDPATH**/ ?>