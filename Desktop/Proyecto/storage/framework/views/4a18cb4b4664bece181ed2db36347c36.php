<!-- resources/views/categorias/index.blade.php -->


<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <a href="<?php echo e(route('home')); ?>" class="btn btn-secondary btn-sm mb-3">
                    <i class="bi bi-arrow-left"></i> Volver a Home
                </a>
                <h1 class="mb-3">Listado de Categorías</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="<?php echo e(route('categorias.create')); ?>" class="btn btn-primary">Crear Categoría</a>
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
        <?php if (isset($component)) { $__componentOriginalbcafd36149e4ceed0eaf8497a5ac4153 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbcafd36149e4ceed0eaf8497a5ac4153 = $attributes; } ?>
<?php $component = App\View\Components\TableResponsiveIndexCategorias::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table-responsive-index-categorias'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TableResponsiveIndexCategorias::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('header', null, []); ?> 
                <tr class="text-center">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
             <?php $__env->endSlot(); ?>

             <?php $__env->slot('body', null, []); ?> 
                <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="text-center">
                        <td><?php echo e($categoria->id); ?></td>
                        <td><?php echo e($categoria->nombre); ?></td>
                        <td>
                            <!-- Usamos el componente ActionButtons para los botones de acción -->
                            <?php if (isset($component)) { $__componentOriginalcb5089686393026183cce2e1c194b1d1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcb5089686393026183cce2e1c194b1d1 = $attributes; } ?>
<?php $component = App\View\Components\AccionBotonesIndexCategorias::resolve(['editRoute' => route('categorias.edit', $categoria->id),'deleteRoute' => route('categorias.destroy', $categoria->id)] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('accion-botones-index-categorias'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AccionBotonesIndexCategorias::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcb5089686393026183cce2e1c194b1d1)): ?>
<?php $attributes = $__attributesOriginalcb5089686393026183cce2e1c194b1d1; ?>
<?php unset($__attributesOriginalcb5089686393026183cce2e1c194b1d1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcb5089686393026183cce2e1c194b1d1)): ?>
<?php $component = $__componentOriginalcb5089686393026183cce2e1c194b1d1; ?>
<?php unset($__componentOriginalcb5089686393026183cce2e1c194b1d1); ?>
<?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbcafd36149e4ceed0eaf8497a5ac4153)): ?>
<?php $attributes = $__attributesOriginalbcafd36149e4ceed0eaf8497a5ac4153; ?>
<?php unset($__attributesOriginalbcafd36149e4ceed0eaf8497a5ac4153); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbcafd36149e4ceed0eaf8497a5ac4153)): ?>
<?php $component = $__componentOriginalbcafd36149e4ceed0eaf8497a5ac4153; ?>
<?php unset($__componentOriginalbcafd36149e4ceed0eaf8497a5ac4153); ?>
<?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MSCOD3\Desktop\inventario\resources\views/categorias/index.blade.php ENDPATH**/ ?>