<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(@globalAsset(setting('favicon'))); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <input type="hidden" name="url" id="url" value="<?php echo e(url('')); ?>">
    <meta name="keywords" content="admin, admin dashboard, admin template, backend, bootstrap, crm, laravel, laravel admin, web application">
    <meta name="description" content="OnestDrax - Laravel Admin Dashboard Starter Kit with User Manager, Role, Permission, Language Manage with RTL & More">
    <?php if(findDirectionOfLang()== "rtl"): ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/assets/css/bootstrap.rtl.min.css">
    <?php else: ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/assets/css/bootstrap.min.css">
    <?php endif; ?>

    <!-- css  -->
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/assets/css/semantic.rtl.min.css">
    <!-- metis menu for sidebar  -->
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/assets/css/metisMenu.min.css">
    
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/assets/css/apexcharts.min.css">
    <!-- jvectormap css -->
    <link rel="stylesheet" href="<?php echo e(asset('backend/vendors/jvectormap/css/jquery-jvectormap-1.2.2.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/assets/css/icon-fonts.css">
    <!-- All Plugin  -->
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/assets/css/plugin.css">
    <!-- Custom CSS  start -->
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/assets/css/style2.css">
</head>

<body class="<?php echo e(@findDirectionOfLang()); ?>" dir="<?php echo e(@findDirectionOfLang()); ?>">

    <div id="layout-wrapper">
        <!-- start header -->
        <?php echo $__env->make('backend.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end header -->

        <!-- start sidebar -->
        <?php echo $__env->make('backend.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end sidebar -->

        <main class="main-content ph-24 ph-lg-32 pt-100 mt-4">
            <!-- start main content -->
            <?php echo $__env->yieldContent('content'); ?>
            <!-- end main content -->

            <!-- start footer -->
            <?php echo $__env->make('backend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- end footer -->
        </main>
    </div>


    
    <script src="<?php echo e(asset('backend')); ?>/assets/js/theme.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/popper.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/semantic.min.js"></script>
    <!-- Metis menu for sidebar  -->
    <script src="<?php echo e(asset('backend')); ?>/assets/js/metisMenu.min.js"></script>
    <!-- jvectormap js -->
    <script src="<?php echo e(asset('backend/vendors/jvectormap/js/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/jvectormap/js/jquery-jvectormap-us-merc-en.js')); ?>"></script>
    
    <script src="<?php echo e(asset('backend')); ?>/vendors/apexchart/js/apexcharts.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/vendors/chartjs/js/chart.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/ot-charts.js"></script>

    <script src="<?php echo e(asset('backend')); ?>/assets/js/datepicker.min.js"></script>
    
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugin.js"></script>
    <!-- Vendor JS end  -->
    <script src="<?php echo e(asset('backend')); ?>/assets/js/main.js"></script>
    
    <script src="<?php echo e(asset('backend')); ?>/assets/js/custom.js"></script>

    
    <?php echo $__env->make('backend.partials.alert-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    <?php echo $__env->yieldPushContent('script'); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\khelardan\resources\views/backend/master.blade.php ENDPATH**/ ?>