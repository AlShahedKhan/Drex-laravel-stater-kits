
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
            <div class="col-sm-6">
                <!-- Bookmark Start-->
                <div class="bookmark">
                    <ul>
                        <li><a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg></a></li>
                        <li><a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></a></li>
                        <li><a href="javascript:void(0)" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-command"><path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path></svg></a></li>
                        <li><a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg></a></li>
                        <li><a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star bookmark-search"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a></li>
                    </ul>
                </div>
                <!-- Bookmark Ends-->
            </div>
        </div>
    </div>
    

    <!--  table content start -->
    <div class="table-content table-basic mt-20">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0"><?php echo e(___('users_roles.users')); ?></h4>
                <?php if(hasPermission('user_create')): ?>
                <a href="<?php echo e(route('users.create')); ?>" class="btn btn-lg ot-btn-primary">
                    <span><i class="fa-solid fa-plus"></i> </span>
                    <span class=""><?php echo e(___('users_roles.add_user')); ?></span>
                </a>
                <?php endif; ?>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered user-table">
                        <thead class="thead">
                            <tr>
                                <th class="serial"><?php echo e(___('common.sr_no.')); ?></th>
                                <th class="purchase"><?php echo e(___('users_roles.Name')); ?></th>
                                <th class="purchase"><?php echo e(___('users_roles.email')); ?></th>
                                <th class="purchase"><?php echo e(___('common.phone')); ?></th>
                                <th class="purchase"><?php echo e(___('common.status')); ?></th>
                                <?php if(hasPermission('user_update') || hasPermission('user_delete')): ?>
                                <th class="action"><?php echo e(___('common.action')); ?></th>
                                <?php endif; ?>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <?php $__empty_1 = true; $__currentLoopData = $data['users']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr id="row_<?php echo e($row->id); ?>">
                                <td class="serial"><?php echo e(++$key); ?></td>
                                <td>
                                    <div class="">
                                        <a href="#">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <img src="<?php echo e(@globalAsset($row->image->path)); ?>"
                                                        alt="<?php echo e($row->name); ?>">
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead"><?php echo e($row->name); ?> <span
                                                            class="dot dot-success d-md-none ml-1"></span></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </td>
                                <td><?php echo e($row->email); ?></td>
                                <td><?php echo e($row->phone); ?></td>
                                <td>
                                    <?php if($row->status == App\Enums\Status::ACTIVE): ?>
                                    <span class="badge-basic-success-text"><?php echo e(___('common.active')); ?></span>
                                    <?php else: ?>
                                    <span class="badge-basic-danger-text"><?php echo e(___('common.inactive')); ?></span>
                                    <?php endif; ?>
                                </td>
                                <?php if(hasPermission('user_update') || hasPermission('user_delete')): ?>
                                <td class="action">
                                    <div class="dropdown dropdown-action">
                                        <button type="button" class="btn-dropdown" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <?php if(hasPermission('user_update')): ?>
                                            <li>
                                                <a class="dropdown-item" href="<?php echo e(route('users.edit', $row->id)); ?>">
                                                    <span class="icon mr-8"><i
                                                            class="fa-solid fa-pen-to-square"></i></span>
                                                    <span><?php echo e(___('common.Edit')); ?></span>
                                                </a>
                                            </li>
                                            <?php endif; ?>
                                            <?php if(hasPermission('user_delete')): ?>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);"
                                                    onclick="delete_row('users/delete', <?php echo e($row->id); ?>)">
                                                    <span class="icon mr-12"><i
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
                                <?php echo $data['users']->links(); ?>

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

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\khelardan\resources\views/backend/users/index.blade.php ENDPATH**/ ?>