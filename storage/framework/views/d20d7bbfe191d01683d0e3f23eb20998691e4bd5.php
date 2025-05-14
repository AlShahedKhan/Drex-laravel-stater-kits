

<?php $__env->startSection('title'); ?>
    <?php echo e(@$data['title']); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.css"
        integrity="sha512-YdYyWQf8AS4WSB0WWdc3FbQ3Ypdm0QCWD2k4hgfqbQbRCJBEgX0iAegkl2S1Evma5ImaVXLBeUkIlP6hQ1eYKQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-content">

        
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="bradecrumb-title mb-1"><?php echo e($data['title']); ?></h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><?php echo e($data['title']); ?></li>
                    </ol>
                </div>
            </div>
        </div>
        

        <div class="card ot-card">
            <div class="card-header">
                <h4><?php echo e(___('common.recaptcha_settings')); ?></h4>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('settings.recaptcha-setting')); ?>" enctype="multipart/form-data" method="post"
                    id="visitForm">
                    <?php echo csrf_field(); ?>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="row">
                                
                                <div class="row mb-3">
                                    <div class="col-12 col-md-6 col-xl-6 col-lg-6 mb-3">
                                        <label for="inputname" class="form-label"><?php echo e(___('settings.recaptcha_sitekey')); ?>

                                            <span class="fillable">*</span></label>
                                        <input type="text" name="recaptcha_sitekey"
                                            class="form-control ot-input <?php $__errorArgs = ['recaptcha_sitekey'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            value="<?php echo e(Setting('recaptcha_sitekey')); ?>">
                                        <?php $__errorArgs = ['recaptcha_sitekey'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div id="validationServer04Feedback" class="invalid-feedback">
                                                <?php echo e($message); ?>

                                            </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    

                                    
                                    <div class="col-12 col-md-6 col-xl-6 col-lg-6 mb-3">
                                        <label for="inputname" class="form-label"><?php echo e(___('settings.recaptcha_secret')); ?>

                                            <span class="fillable">*</span></label>
                                        <input type="text" name="recaptcha_secret"
                                            class="form-control ot-input <?php $__errorArgs = ['recaptcha_secret'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            value="<?php echo e(Setting('recaptcha_secret')); ?>">
                                        
                                        <?php $__errorArgs = ['recaptcha_secret'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div id="validationServer04Feedback" class="invalid-feedback">
                                                <?php echo e($message); ?>

                                            </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    

                                    
                                    <div class="col-12 col-md-6 col-xl-6 col-lg-6 mb-3">
                                        <label for="validationServer04"
                                            class="form-label"><?php echo e(___('settings.recaptcha_status')); ?> <span
                                                class="fillable">*</span></label>
                                        <select class="nice-select niceSelect bordered_style wide <?php $__errorArgs = ['recaptcha_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            value="<?php echo e(Setting('recaptcha_status')); ?>" name="recaptcha_status"
                                            id="validationServer04" aria-describedby="validationServer04Feedback">
                                            <option value="">Select</option>
                                            <option value="<?php echo e(App\Enums\Status::ACTIVE); ?>"
                                                <?php echo e(Setting('recaptcha_status') == App\Enums\Status::ACTIVE ? 'selected' : ''); ?>>
                                                <?php echo e(___('common.active')); ?></option>
                                            <option value="<?php echo e(App\Enums\Status::INACTIVE); ?>"
                                                <?php echo e(Setting('recaptcha_status') == App\Enums\Status::INACTIVE ? 'selected' : ''); ?>>
                                                <?php echo e(___('common.inactive')); ?></option>
                                        </select>
                                    </div>
                                    <?php $__errorArgs = ['recaptcha_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    
                                </div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <div class="text-end">
                                    <?php if(hasPermission('recaptcha_settings_update')): ?>
                                        <button class="btn btn-lg ot-btn-primary">
                                            <span>
                                                <i class="fa-solid fa-save"></i>
                                            </span><?php echo e(___('common.update')); ?>

                                        </button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\khelardan\resources\views/backend/settings/recaptcha-settings.blade.php ENDPATH**/ ?>