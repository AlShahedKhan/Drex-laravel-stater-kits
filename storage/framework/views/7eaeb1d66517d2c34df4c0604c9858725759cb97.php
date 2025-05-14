

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
                <h4><?php echo e(___('settings.general_settings')); ?></h4>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('settings.general-settings')); ?>" enctype="multipart/form-data" method="post"
                    id="visitForm">
                    <?php echo csrf_field(); ?>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="row mb-3">
                                <!--Application Name Start -->
                                <div class="col-12 col-md-6 col-xl-6 col-lg-6 mb-3 ">
                                    <label for="inputname" class="form-label"><?php echo e(___('settings.application_name')); ?> <span
                                            class="fillable">*</span></label>
                                    <input type="text" name="application_name"
                                        class="form-control ot-input <?php $__errorArgs = ['application_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        value="<?php echo e(Setting('application_name')); ?>"
                                        placeholder="<?php echo e(___('settings.enter_you_application_name')); ?>">
                                    <?php $__errorArgs = ['application_name'];
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
                                <!--Application Name End -->
                                <!--Footer Text Start -->
                                <div class="col-12 col-md-6 col-xl-6 col-lg-6 mb-3 ">
                                    <label for="inputname" class="form-label"><?php echo e(___('settings.footer_text')); ?> <span
                                            class="fillable">*</span></label>
                                    <input type="text" name="footer_text"
                                        class="form-control ot-input <?php $__errorArgs = ['footer_text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        value="<?php echo e(Setting('footer_text')); ?>"
                                        placeholder="<?php echo e(___('settings.enter_your_footer_text')); ?>">
                                    <?php $__errorArgs = ['footer_text'];
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
                            <div class="row mb-3">
                                <div class="col-12 col-md-6 col-xl-6 col-lg-6 mb-3">
                                    <label class="form-label" for="light_logo"><?php echo e(___('settings.light_logo')); ?> </label>
                                    <br>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <img class="img-thumbnail mb-10 ot-input full-logo setting-image"
                                            src="<?php echo e(@globalAsset(setting('light_logo'), '154x38.png')); ?>"
                                            alt="<?php echo e(__('light logo')); ?>">
                                    </div>

                                    
                                    <div class="ot_fileUploader left-side mb-3">
                                        <input class="form-control" type="text" placeholder="Browse Light Logo" readonly="" id="placeholder">
                                        <button class="primary-btn-small-input" type="button">
                                            <label class="btn btn-lg ot-btn-primary" for="fileBrouse">Browse</label>
                                            <input type="file" class="d-none form-control" name="light_logo" id="fileBrouse">
                                        </button>
                                    </div>
                                </div>
                                <!--White Logo End -->
                                <!--Black Logo Start -->
                                <div class="col-12 col-md-6 col-xl-6 col-lg-6 ">
                                    <label class="form-label" for="dark_logo"><?php echo e(___('settings.dark_logo')); ?> </label>
                                    <br>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <img class="img-thumbnail mb-10 ot-input full-logo setting-image"
                                            src="<?php echo e(@globalAsset(setting('dark_logo'), '154x38.png')); ?>"
                                            alt="<?php echo e(__('dark logo')); ?>">
                                    </div>
                                    
                                    <div class="ot_fileUploader left-side mb-3">
                                        <input class="form-control" type="text" placeholder="Browse Dark logo" readonly="" id="placeholder2">
                                        <button class="primary-btn-small-input" type="button">
                                            <label class="btn btn-lg ot-btn-primary" for="fileBrouse2">Browse</label>
                                            <input type="file" class="d-none form-control" name="dark_logo" id="fileBrouse2">
                                        </button>
                                    </div>
                                </div>
                                <!--Black Logo End -->
                                <div class="col-12">
                                    <div class="">
                                        <div class="row align-items-end">
                                            <!--Favicon Start -->
                                            <div class="col-md-6 favicon-uploader">
                                                <div class="d-flex flex-column">
                                                    <label class="form-label"
                                                        for="favicon"><?php echo e(___('settings.favicon')); ?></label>
                                                    <br>
                                                    <div class="d-flex align-items-center gap-3 justify-content-center">
                                                        <img class="img-thumbnail mb-10 ot-input full-logo setting-image"
                                                            src="<?php echo e(@globalAsset(setting('favicon'), '38x38.png')); ?>"
                                                            alt="<?php echo e(__('favicon')); ?>">
                                                    </div>
                                                    <div class="ot_fileUploader left-side mb-3">
                                                        <input class="form-control" type="text" placeholder="Browse favicon" readonly="" id="placeholder3">
                                                        <button class="primary-btn-small-input" type="button">
                                                            <label class="btn btn-lg ot-btn-primary" for="fileBrouse3">Browse</label>
                                                            <input type="file" class="d-none form-control" name="favicon" id="fileBrouse3">
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Favicon End -->
                                            <!-- Default Langauge Start-->
                                            <div class="col-md-6 default-langauge">
                                                <div class="d-flex flex-column">
                                                    <label for="default langauge"
                                                        class="form-label"><?php echo e(___('settings.Default Langauge')); ?> <span
                                                            class="fillable">*</span></label>
                                                    <select name="default_langauge" id="defaultlangaugeId"
                                                        class="form-select ot-input flag_icon_list <?php $__errorArgs = ['default_langauge'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                        <option value=""><?php echo e(___('settings.Default langauge')); ?>

                                                        </option>
                                                        <?php $__currentLoopData = $data['languages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($row->code); ?>"
                                                                data-icon="<?php echo e($row->icon_class); ?>"
                                                                <?php echo e(Setting('default_langauge') == $row->code ? 'selected' : ''); ?>>
                                                                <?php echo e($row->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Default Langauge End-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mt-3">
                            <!-- Update Button Start-->
                            <div class="text-end">
                                <?php if(hasPermission('general_settings_update')): ?>
                                    <button class="btn btn-lg ot-btn-primary"><span><i class="fa-solid fa-save"></i>
                                        </span><?php echo e(___('common.update')); ?></button>
                                <?php endif; ?>
                            </div>
                            <!-- Update Button End-->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\khelardan\resources\views/backend/settings/general-settings.blade.php ENDPATH**/ ?>