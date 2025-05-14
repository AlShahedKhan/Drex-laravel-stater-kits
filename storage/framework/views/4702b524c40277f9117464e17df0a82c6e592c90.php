

<?php $__env->startSection('title'); ?>
    <?php echo e(@$data['title']); ?>

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
                        <li class="breadcrumb-item">Edit Terms</li>
                    </ol>
                </div>
            </div>
        </div>
        

        <div class="card ot-card">
            
            <div class="card-body">
                <form action="<?php echo e(route('languages.update.terms', @$data['language']->code)); ?>" enctype="multipart/form-data"
                    method="post" id="terms-form">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <input type="hidden" name="code" id="code" value="<?php echo e(@$data['language']->code); ?>">
                    <div class="row mb-3">
                        <div class="col-md-12 mb-3">
                            <label for="validationServer04" class="form-label"><?php echo e(___('language.module')); ?></label>
                            <select class="form-select ot-input <?php $__errorArgs = ['lang_module'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> change-module"
                                name="lang_module" id="validationServer04" aria-describedby="validationServer04Feedback">
                                <option value="common" selected><?php echo e(___('language.common')); ?></option>
                                <option value="settings"><?php echo e(___('language.settings')); ?></option>
                                <option value="language"><?php echo e(___('language.language')); ?></option>
                                <option value="users_roles"><?php echo e(___('language.users_roles')); ?></option>
                                <option value="cricket"><?php echo e(___('language.cricket')); ?></option>
                                <option value="football"><?php echo e(___('language.football')); ?></option>
                            </select>
                            <?php $__errorArgs = ['lang_module'];
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
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleDataList" class="form-label "><?php echo e(___('language.term')); ?></label>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleDataList"
                                        class="form-label "><?php echo e(___('language.translated_language')); ?></label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 term-translated-language">
                            <?php $__currentLoopData = $data['terms']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <input class="form-control ot-input" name="name" list="datalistOptions"
                                            id="exampleDataList" value="<?php echo e($key); ?>" disabled>
                                    </div>
                                    <div class="col-md-6 translated_language">
                                        <input class="form-control ot-input" list="datalistOptions" id="exampleDataList"
                                            placeholder="<?php echo e(___('language.translated_language')); ?>"
                                            name="<?php echo e($key); ?>" value="<?php echo e($row); ?>">
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <div class="col-md-12 mt-3">
                            <div class="text-end">
                                <button class="btn btn-lg ot-btn-primary"><span><i class="fa-solid fa-save"></i>
                                    </span><?php echo e(___('common.submit')); ?></button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\khelardan\resources\views/backend/languages/terms.blade.php ENDPATH**/ ?>