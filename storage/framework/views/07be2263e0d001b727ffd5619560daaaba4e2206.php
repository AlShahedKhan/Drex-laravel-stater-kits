<?php $__currentLoopData = $data['permissions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($permission->attribute); ?></td>
        <td>
            <div class="permission-list-td">
                <?php $__currentLoopData = $permission->keywords; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $keyword): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="input-check-radio">
                    <div class="form-check d-flex align-items-center">
                        <?php if($keyword != ''): ?>
                            <input type="checkbox"
                                class="form-check-input mt-0 mr-4 read common-key"
                                name="permissions[]" value="<?php echo e($keyword); ?>"
                                id="<?php echo e($keyword); ?>" <?php echo e(in_array($keyword, $data['role_permissions']) ? 'checked':''); ?>>
                            <label class="custom-control-label"
                                for="<?php echo e($keyword); ?>"><?php echo e(__($key)); ?></label>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\laragon\www\khelardan\resources\views/backend/users/permissions.blade.php ENDPATH**/ ?>