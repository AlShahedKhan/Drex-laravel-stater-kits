

<?php $__env->startSection('title', 'Error Page 404'); ?>
<?php $__env->startSection('main'); ?>
<main>
    <section
      class="error-wrapper bg-white p-0 m-0 text-center d-flex justify-content-center align-items-center flex-column"
    >
      <div
        class="error-content p-0 m-0 text-center d-flex justify-content-center align-items-center flex-column"
      >
        <!-- error 404 image  -->
        <img src="<?php echo e(asset('backend')); ?>/assets/images/error/error500.png" alt="" />
        <!-- Head text  -->
        <h1 class="mt-30">404! Page Not Found</h1>
        <!-- Error text   -->
        <p class="mt-10">
            You were trying to reach couldn't be found on the server.
        </p>
        <!-- Back to homepage button  -->
        <div class="btn-back-to-homepage mt-28">
          <a href="<?php echo e(url('dashboard')); ?>" class="submit-button pv-16  btn ot-btn-primary">
            Back to Homepage
          </a>
        </div>
      </div>
    </section>
  </main>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.errors.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\khelardan\resources\views/backend/errors/404.blade.php ENDPATH**/ ?>