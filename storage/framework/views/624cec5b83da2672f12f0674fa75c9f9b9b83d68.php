<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="Onest Multipurpose Admin &amp; Dashboard Template"
      name="description"
    />
    <meta content="Onest Tech" name="author" />
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- vendors css  -->

    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/vendors/bootstrap/css/bootstrap.min.css" />

    <!-- vendors CSS end  -->

    <!-- Custom CSS  start -->

    <!-- style css -->
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/assets/css/style.css" />

    <!-- Custom CSS  end -->
  </head>

  <body>
     <!-- main content start -->
    <?php echo $__env->yieldContent('main'); ?>
    <!-- main content end -->
  </body>
</html>
<?php /**PATH C:\laragon\www\khelardan\resources\views/backend/errors/master.blade.php ENDPATH**/ ?>