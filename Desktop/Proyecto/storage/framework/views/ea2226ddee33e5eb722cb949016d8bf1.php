<div class="btn-group" role="group">
    <a href="<?php echo e($editRoute); ?>" class="btn btn-primary btn-sm me-2">Editar</a>
    <form action="<?php echo e($deleteRoute); ?>" method="POST" class="d-inline-block">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
    </form>
</div><?php /**PATH C:\Users\MSCOD3\Desktop\inventario\resources\views/components/accion-botones-index-articulos.blade.php ENDPATH**/ ?>