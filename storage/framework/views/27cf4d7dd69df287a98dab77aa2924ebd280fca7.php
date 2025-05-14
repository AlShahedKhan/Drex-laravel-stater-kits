
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
                    </ol>
                </div>
            </div>
        </div>
        

        <!--  table content start -->
        <div class="table-content table-basic mt-20">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0"><?php echo e(___('users_roles.roles')); ?></h4>
                    <?php if(hasPermission('role_create')): ?>
                        <a href="<?php echo e(route('roles.create')); ?>" class="btn btn-lg ot-btn-primary">
                            <span><i class="fa-solid fa-plus"></i> </span>
                            <span class=""><?php echo e(___('users_roles.add_role')); ?></span>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered role-table">
                            <thead class="thead">
                                <tr>
                                    <th class="serial"><?php echo e(___('common.sr_no')); ?></th>
                                    <th class="purchase"><?php echo e(___('common.name')); ?></th>
                                    <th class="purchase"><?php echo e(___('users_roles.permissions')); ?></th>
                                    <th class="purchase"><?php echo e(___('common.status')); ?></th>
                                    <?php if(hasPermission('role_update') || hasPermission('role_delete')): ?>
                                        <th class="action"><?php echo e(___('common.action')); ?></th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                <?php $__empty_1 = true; $__currentLoopData = $data['roles']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr id="row_<?php echo e($row->id); ?>">
                                    <td class="serial"><?php echo e(++$key); ?></td>
                                    <td><?php echo e($row->name); ?></td>
                                    <td><span
                                            class="badge-basic-success-text"><?php echo e($row->permissions != '' ? count($row->permissions) : '0'); ?></span>
                                    </td>
                                    <td>
                                        <?php if($row->status == App\Enums\Status::ACTIVE): ?>
                                            <span class="badge-basic-success-text"><?php echo e(___('common.active')); ?></span>
                                        <?php else: ?>
                                            <span class="badge-basic-danger-text"><?php echo e(___('common.inactive')); ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <?php if(hasPermission('role_update') || hasPermission('role_delete')): ?>
                                        <td class="action">
                                            <div class="dropdown dropdown-action">
                                                <button type="button" class="btn-dropdown" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end ">
                                                    <?php if(hasPermission('role_update')): ?>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="<?php echo e(route('roles.edit', $row->id)); ?>"><span
                                                                    class="icon mr-8"><i
                                                                        class="fa-solid fa-pen-to-square"></i></span>
                                                                <?php echo e(___('users_roles.Edit')); ?></a>
                                                        </li>
                                                    <?php endif; ?>
                                                    <?php if(hasPermission('role_delete')): ?>
                                                        <li>
                                                            <a class="dropdown-item" href="javascript:void(0);"
                                                                onclick="delete_row('roles/delete', <?php echo e($row->id); ?>)">
                                                                <span class="icon mr-8"><i
                                                                        class="fa-solid fa-trash-can"></i></span>
                                                                <span><?php echo e(___('common.delete')); ?></span>
                                                            </a>
                                                        </li>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        </td>
                                    <?php endif; ?>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="100%" class="text-center gray-color">
                                        <img src="<?php echo e(asset('images/no_data.svg')); ?>" alt="" class="mb-primary" width="100">
                                        <p class="mb-0 text-center">No data available</p>
                                        <p class="mb-0 text-center text-secondary font-size-90">
                                            Please add new entity regarding this table</p>
                                    </td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <!--  table end -->
                    <!--  pagination start -->

                        <div class="ot-pagination pagination-content d-flex justify-content-end align-content-center py-3">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-between">
                                    <?php echo $data['roles']->links(); ?>

                                </ul>
                            </nav>
                        </div>

                    <!--  pagination end -->
                </div>
            </div>
        </div>
        <!--  table content end -->

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <?php echo $__env->make('backend.partials.delete-ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\khelardan\resources\views/backend/roles/index.blade.php ENDPATH**/ ?>