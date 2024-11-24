<!-- resources/views/components/form-input.blade.php -->
<div class="mb-3">
    <label for="<?php echo e($name); ?>" class="form-label"><?php echo e($label); ?></label>
    <input type="<?php echo e($type ?? 'text'); ?>" name="<?php echo e($name); ?>" class="form-control" id="<?php echo e($name); ?>" value="<?php echo e(old($name)); ?>">
</div>
<?php /**PATH C:\Users\MSCOD3\Desktop\inventario\resources\views/components/form-input-tallas-create.blade.php ENDPATH**/ ?>