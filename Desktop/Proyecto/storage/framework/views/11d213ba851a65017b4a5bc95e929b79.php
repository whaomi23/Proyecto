<div class="table-responsive">
<table class="table table-striped table-hover mt-3">
                <thead class="table-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>Talla</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php $__currentLoopData = $tallas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $talla): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($talla->id); ?></td>
                            <td><?php echo e($talla->talla); ?></td>
                            <td>
                                <a href="<?php echo e(route('tallas.show', $talla->id)); ?>" class="btn btn-info btn-sm me-2">Ver</a>
                                <a href="<?php echo e(route('tallas.edit', $talla->id)); ?>" class="btn btn-primary btn-sm me-2">Editar</a>
                                <form action="<?php echo e(route('tallas.destroy', $talla->id)); ?>" method="POST" class="d-inline-block">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
</table>
</div>

<?php /**PATH C:\Users\MSCOD3\Desktop\inventario\resources\views/components/tabla-index-tallas.blade.php ENDPATH**/ ?>