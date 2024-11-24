<!-- resources/views/components/input-field.blade.php -->
<div class="mb-3">
    <label for="<?php echo e($name); ?>" class="form-label"><?php echo e($label); ?></label>
    <input type="text" name="<?php echo e($name); ?>" class="form-control" id="<?php echo e($name); ?>" value="<?php echo e($value ?? old($name)); ?>">
</div>
<?php /**PATH C:\Users\MSCOD3\Desktop\inventario\resources\views/components/input-field.blade.php ENDPATH**/ ?>