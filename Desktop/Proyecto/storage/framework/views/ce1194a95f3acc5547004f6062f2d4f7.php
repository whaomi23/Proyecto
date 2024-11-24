

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h4><?php echo e(__('Iniciar Sesión')); ?></h4>
                </div>

                <div class="card-body p-4">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <!-- Icono de Usuario en el centro -->
                        <div class="d-flex justify-content-center mb-4">
                            <div class="icon-container">
                                <i class="fas fa-user-circle fa-4x text-primary"></i>
                            </div>
                        </div>

                        <!-- Campo de Email con icono -->
                        <div class="mb-3">
                            <label for="email" class="form-label"><?php echo e(__('Correo Electrónico')); ?></label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-0">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                            </div>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Campo de Contraseña con icono -->
                        <div class="mb-3">
                            <label for="password" class="form-label"><?php echo e(__('Contraseña')); ?></label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-0">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
                            </div>
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Recordar usuario y contraseña olvidada -->
                        <div class="mb-4 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="remember"><?php echo e(__('Recordarme')); ?></label>
                            </div>
                            <?php if(Route::has('password.request')): ?>
                                <a class="btn btn-link p-0" href="<?php echo e(route('password.request')); ?>">
                                    <i class="fas fa-question-circle"></i> <?php echo e(__('¿Olvidaste tu contraseña?')); ?>

                                </a>
                            <?php endif; ?>
                        </div>

                        <!-- Botón de Enviar -->
                        <div class="d-grid gap-2 mb-4">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-sign-in-alt"></i> <?php echo e(__('Iniciar Sesión')); ?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MSCOD3\Desktop\inventario\resources\views/auth/login.blade.php ENDPATH**/ ?>