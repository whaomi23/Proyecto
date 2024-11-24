<!--resources/views/home.blade.php-->


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 mb-4">
            <h2 class="text-center text-dark font-weight-bold"><?php echo e(__('Panel de Opciones')); ?></h2>
        </div>

        <!-- Card para Tiendas -->
        <?php if (isset($component)) { $__componentOriginalc202303fe85be150de77cb358b87328d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc202303fe85be150de77cb358b87328d = $attributes; } ?>
<?php $component = App\View\Components\HomeCardTiendas::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home-card-tiendas'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\HomeCardTiendas::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc202303fe85be150de77cb358b87328d)): ?>
<?php $attributes = $__attributesOriginalc202303fe85be150de77cb358b87328d; ?>
<?php unset($__attributesOriginalc202303fe85be150de77cb358b87328d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc202303fe85be150de77cb358b87328d)): ?>
<?php $component = $__componentOriginalc202303fe85be150de77cb358b87328d; ?>
<?php unset($__componentOriginalc202303fe85be150de77cb358b87328d); ?>
<?php endif; ?>

        <!-- Card para Productos -->
        <?php if (isset($component)) { $__componentOriginalce8a807005a589484fe1c118d2c16590 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce8a807005a589484fe1c118d2c16590 = $attributes; } ?>
<?php $component = App\View\Components\HomeCardProductos::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home-card-productos'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\HomeCardProductos::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce8a807005a589484fe1c118d2c16590)): ?>
<?php $attributes = $__attributesOriginalce8a807005a589484fe1c118d2c16590; ?>
<?php unset($__attributesOriginalce8a807005a589484fe1c118d2c16590); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce8a807005a589484fe1c118d2c16590)): ?>
<?php $component = $__componentOriginalce8a807005a589484fe1c118d2c16590; ?>
<?php unset($__componentOriginalce8a807005a589484fe1c118d2c16590); ?>
<?php endif; ?>

        <!-- Card para Categorías -->
        <?php if (isset($component)) { $__componentOriginal31bd6a2f12af9b4efdec1e0176287651 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal31bd6a2f12af9b4efdec1e0176287651 = $attributes; } ?>
<?php $component = App\View\Components\HomeCardCategorias::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home-card-categorias'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\HomeCardCategorias::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal31bd6a2f12af9b4efdec1e0176287651)): ?>
<?php $attributes = $__attributesOriginal31bd6a2f12af9b4efdec1e0176287651; ?>
<?php unset($__attributesOriginal31bd6a2f12af9b4efdec1e0176287651); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal31bd6a2f12af9b4efdec1e0176287651)): ?>
<?php $component = $__componentOriginal31bd6a2f12af9b4efdec1e0176287651; ?>
<?php unset($__componentOriginal31bd6a2f12af9b4efdec1e0176287651); ?>
<?php endif; ?>

        <!-- Card para Tallas -->
        <?php if (isset($component)) { $__componentOriginal2db1b5a9d6c91f4d899da66697299fe2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2db1b5a9d6c91f4d899da66697299fe2 = $attributes; } ?>
<?php $component = App\View\Components\HomeCardTallas::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home-card-tallas'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\HomeCardTallas::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2db1b5a9d6c91f4d899da66697299fe2)): ?>
<?php $attributes = $__attributesOriginal2db1b5a9d6c91f4d899da66697299fe2; ?>
<?php unset($__attributesOriginal2db1b5a9d6c91f4d899da66697299fe2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2db1b5a9d6c91f4d899da66697299fe2)): ?>
<?php $component = $__componentOriginal2db1b5a9d6c91f4d899da66697299fe2; ?>
<?php unset($__componentOriginal2db1b5a9d6c91f4d899da66697299fe2); ?>
<?php endif; ?>

        <!-- Card para Artículos -->
        <?php if (isset($component)) { $__componentOriginal15d40f1fe4e3c1a6d5ebb5dc4944b5bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal15d40f1fe4e3c1a6d5ebb5dc4944b5bb = $attributes; } ?>
<?php $component = App\View\Components\HomeCardArticulos::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home-card-articulos'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\HomeCardArticulos::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal15d40f1fe4e3c1a6d5ebb5dc4944b5bb)): ?>
<?php $attributes = $__attributesOriginal15d40f1fe4e3c1a6d5ebb5dc4944b5bb; ?>
<?php unset($__attributesOriginal15d40f1fe4e3c1a6d5ebb5dc4944b5bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal15d40f1fe4e3c1a6d5ebb5dc4944b5bb)): ?>
<?php $component = $__componentOriginal15d40f1fe4e3c1a6d5ebb5dc4944b5bb; ?>
<?php unset($__componentOriginal15d40f1fe4e3c1a6d5ebb5dc4944b5bb); ?>
<?php endif; ?>


    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MSCOD3\Desktop\inventario\resources\views/home.blade.php ENDPATH**/ ?>