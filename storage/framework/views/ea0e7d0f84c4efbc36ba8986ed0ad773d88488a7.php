

<?php $__env->startSection('title'); ?>
    <?php echo e($data['title']); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- form heading  -->
    <div class="form-heading mb-40">
        <h1 class="title mb-8"><?php echo e(___('common.login')); ?></h1>
        <p class="subtitle mb-0"><?php echo e(___('common.welcome_back_please_login_to_your_account')); ?></p>
    </div>
    <!-- Start With form -->

    <form action="<?php echo e(route('login.auth')); ?>" method="post"
        class="auth-form d-flex justify-content-center align-items-start flex-column">
        <?php echo csrf_field(); ?>
        <!-- username input field  -->
        <div class="input-field-group mb-20">
            <label for="username"><?php echo e(___('common.email')); ?> <sup class="fillable">*</sup></label><br />
            <div class="custom-input-field">
                <input type="email" name="email" class="ot-input <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="username"
                    placeholder="<?php echo e(___('common.enter_your_email')); ?>" />
                <img src="<?php echo e(asset('backend')); ?>/assets/images/icons/username-cus.svg" alt="">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="input-error error-danger invalid-feedback"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

        </div>
        <!-- password input field  -->
        <div class="input-field-group mb-20">
            <label for="password"><?php echo e(___('common.password')); ?> <sup class="fillable">*</sup></label><br />
            <div class="custom-input-field password-input">
                <input type="password" name="password" class="ot-input <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    id="password" placeholder="******************" />
                <i class="lar la-eye"></i>
                <img src="<?php echo e(asset('backend')); ?>/assets/images/icons/lock-cus.svg" alt="">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="input-error error-danger invalid-feedback"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

        </div>
        <!-- password input field  -->
        <?php if(setting('recaptcha_status')): ?>
            <div class="input-field-group">
                <div class="form-group <?php echo e($errors->has('g-recaptcha-response') ? 'is-invalid' : ''); ?>">
                    <label
                        class="control-label <?php echo e($errors->has('g-recaptcha-response') ? 'is-invalid' : ''); ?>"><?php echo e(___('common.captcha')); ?>

                        <sup class="fillable">*</sup></label>
                    <?php echo app('captcha')->display(); ?>

                    <?php if($errors->has('g-recaptcha-response')): ?>
                        <p class="input-error error-danger invalid-feedback"><?php echo e($errors->first('g-recaptcha-response')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <!-- Remember Me and forget password section start -->
        <div class="d-flex justify-content-between align-items-center w-100 mt-20">
            <!-- Remember Me input field  -->
            <div class="remember-me input-check-radio">
                <div class="form-check d-flex align-items-center">
                    <input class="form-check-input" type="checkbox" name="rememberMe" id="rememberMe" />
                    <label for="rememberMe"><?php echo e(___('common.remember_me')); ?></label>
                </div>
            </div>
            <!-- Forget Password link  -->
            <div>
                <a class="fogotPassword" href="<?php echo e(route('forgot-password')); ?>"><?php echo e(___('common.forgot_password')); ?></a>
            </div>
        </div>
        <!-- Remember Me and forget password section end -->

        <!-- submit button  -->
        <button type="submit" class="submit-btn pv-16 mt-32 mb-20" value="Sign In">
            <?php echo e(___('common.login')); ?>

        </button>
    </form>

    <!-- End form -->
    <?php if(\Config::get('app.APP_DEMO')): ?>
    <div class="row">
        <div class="col-md-6">
            <form action="<?php echo e(route('login.auth')); ?>" method="post"
                class="form d-flex justify-content-center align-items-start flex-column">
                <?php echo csrf_field(); ?>
                <input name="email" type="hidden" value="superadmin@onest.com">
                <input name="password" type="hidden" value="123456">
                <input name="g-recaptcha-response" type="hidden" value="123456">
                <button type="submit" class="submit-button submit-button-only-border pv-14"
                    value="Login"><?php echo e(___('common.login_as_superadmin')); ?></button>
            </form>
        </div>
        <div class="col-md-6">
            <form action="<?php echo e(route('login.auth')); ?>" method="post"
                class="form d-flex justify-content-center align-items-start flex-column">
                <?php echo csrf_field(); ?>
                <input name="email" type="hidden" value="admin@onest.com">
                <input name="password" type="hidden" value="123456">
                <input name="g-recaptcha-response" type="hidden" value="123456">
                <button type="submit" class="submit-button submit-button-only-border pv-14"
                    value="Login"><?php echo e(___('common.login_as_admin')); ?></button>
            </form>
        </div>
        <div class="col-md-6">
            <form action="<?php echo e(route('login.auth')); ?>" method="post"
                class="form d-flex justify-content-center align-items-start flex-column">
                <?php echo csrf_field(); ?>
                <input name="email" type="hidden" value="manager@onest.com">
                <input name="password" type="hidden" value="123456">
                <input name="g-recaptcha-response" type="hidden" value="123456">
                <button type="submit" class="submit-button submit-button-only-border pv-14"
                    value="Login"><?php echo e(___('common.login_as_manager')); ?></button>
            </form>
        </div>
        <div class="col-md-6">
            <form action="<?php echo e(route('login.auth')); ?>" method="post"
                class="form d-flex justify-content-center align-items-start flex-column">
                <?php echo csrf_field(); ?>
                <input name="email" type="hidden" value="user@onest.com">
                <input name="password" type="hidden" value="123456">
                <input name="g-recaptcha-response" type="hidden" value="123456">
                <button type="submit" class="submit-button submit-button-only-border pv-14"
                    value="Login"><?php echo e(___('common.login_as_user')); ?></button>
            </form>
        </div>
    </div>
    <?php endif; ?>

    <p class="authenticate-now mb-0">
        <?php echo e(___('common.dont_have_an_account')); ?>

        <a class="link-text" href="<?php echo e(route('register')); ?>"> <?php echo e(___('common.create_an_account')); ?></a>
    </p>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php echo NoCaptcha::renderJs(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\khelardan\resources\views/backend/auth/login.blade.php ENDPATH**/ ?>