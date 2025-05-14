

<?php $__env->startSection('title'); ?>
    <?php echo e(@$data['title']); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-content">
        <div class="card ot-card border-0 ph-14 pv-14 mb-24">
            <div class="card-body pt-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb ot-breadcrumb-secondary mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(___('common.home')); ?></a></li>
                        <li class="breadcrumb-item" aria-current="page"><a
                                href="<?php echo e(route('roles.index')); ?>"><?php echo e(___('users_roles.roles')); ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e(___('common.add_new')); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card ot-card">
            <div class="card-body">
                <form action="<?php echo e(route('roles.store')); ?>" enctype="multipart/form-data" method="post" id="visitForm">
                    <?php echo csrf_field(); ?>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="exampleDataList" class="form-label "><?php echo e(___('common.name')); ?> <span
                                            class="fillable">*</span></label>
                                    <input class="form-control ot-input <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name"
                                        list="datalistOptions" id="exampleDataList"
                                        placeholder="<?php echo e(___('common.enter_name')); ?>">
                                    <?php $__errorArgs = ['name'];
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
                                    <label for="validationServer04" class="form-label"><?php echo e(___('common.status')); ?> <span
                                            class="fillable">*</span></label>
                                    <select class="form-select ot-input <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="status" id="validationServer04"
                                        aria-describedby="validationServer04Feedback">
                                        <option value="">Select</option>
                                        <option value="<?php echo e(App\Enums\Status::ACTIVE); ?>"><?php echo e(___('common.active')); ?></option>
                                        <option value="<?php echo e(App\Enums\Status::INACTIVE); ?>"><?php echo e(___('common.inactive')); ?>

                                        </option>
                                    </select>
                                    <?php $__errorArgs = ['status'];
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
                        </div>
                        <div class="col-lg-6">
                            <!-- table content start  -->
                            <div class="table-container pt-20 role-permisssion-control">
                                <!-- table container start  -->
                                <div class="table-responsive">
                                    <!-- table start  -->
                                    <table class="ot-basic-table ot-table-bg">
                                        <thead>
                                            <th class="user_roles_border"><?php echo e(___('users_roles.module_module_links')); ?></th>
                                            <th class="user_roles_permission"><?php echo e(___('users_roles.Permissions')); ?></th>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $data['permissions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($permission->attribute); ?></td>
                                                    <td>
                                                        <div class="permission-list-td">
                                                            <?php $__currentLoopData = $permission->keywords; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $keyword): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="input-check-radio">
                                                                    <div class="form-check d-flex align-items-center">
                                                                        <?php if($keyword != ''): ?>
                                                                            <input class="form-check-input mr-4  common-key"
                                                                                type="checkbox" name="permissions[]"
                                                                                value="<?php echo e($keyword); ?>"
                                                                                id="<?php echo e($keyword); ?>" />
                                                                            <label class="form-check-label"
                                                                                for="<?php echo e($keyword); ?>"><?php echo e(__($key)); ?></label>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                    <!-- table end  -->
                                </div>
                                <!-- table container end  -->
                            </div>
                            <!-- table content end -->
                        </div>
                        <div class="col-md-12 mt-24">
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

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\khelardan\resources\views/backend/roles/create.blade.php ENDPATH**/ ?>