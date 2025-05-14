<?php if(Session::has('success')): ?>
<script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 1500,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
    })

    Toast.fire({
        icon: 'success',
        title: '<?php echo e(Session::get('success')); ?>'
    })
</script>
<?php endif; ?>
<?php if(Session::has('danger')): ?>
<script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 1500,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
    })

    Toast.fire({
        icon: 'error',
        title: '<?php echo e(Session::get('danger')); ?>'
    })
</script>
<?php endif; ?>
<?php /**PATH C:\laragon\www\khelardan\resources\views/backend/partials/alert-message.blade.php ENDPATH**/ ?>