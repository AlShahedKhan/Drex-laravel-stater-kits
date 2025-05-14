<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <!-- Favicon start -->
        <link rel="icon" type="image/x-icon" href="<?php echo e(@globalAsset(setting('favicon'))); ?>">
        <!-- Favicon end -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="admin, admin dashboard, admin template, backend, bootstrap, crm, laravel, laravel admin, web application">
        <meta name="description" content="OnestDrax - Laravel Admin Dashboard Starter Kit with User Manager, Role, Permission, Language Manage with RTL & More">
        <meta content="Onest Tech" name="author" />

        <!-- css  -->
        <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/assets/css/icon-fonts.css">
        <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/assets/css/semantic.rtl.min.css">
        <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/assets/css/apexcharts.min.css">
        <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/assets/css/plugin.css">
        <!-- metis menu for sidebar  -->
        <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/assets/css/metisMenu.min.css">
        <!-- Custom CSS  start -->
        <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/assets/css/style.css">
    </head>
</head>

<body class="default-theme <?php echo e(@findDirectionOfLang()); ?>" dir="<?php echo e(@findDirectionOfLang()); ?>">
    <!-- main content start -->
    <main class="auth-page">
        <section class="auth-container">
            <div
                class="form-wrapper pv-80 ph-100 bg-white d-flex justify-content-center align-items-center flex-column">
                <div class="form-container d-flex justify-content-center align-items-start flex-column">
                    <div class="form-logo mb-40">
                        <a href="<?php echo e(url('/')); ?>">
                            <img src="<?php echo e(userTheme() == 'default-theme' ? @globalAsset(setting('light_logo'), '154x38.png') : @globalAsset(setting('dark_logo'), '154x38.png')); ?>"
                                alt="" />
                        </a>
                    </div>
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </section>
    </main>

    <script src="<?php echo e(asset('backend')); ?>/assets/js/theme.js"></script>

    <!-- main content end -->
    <script src="<?php echo e(asset('backend')); ?>/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugin.js"></script>

    <script src="<?php echo e(asset('backend')); ?>/assets/js/show-hide-password.js"></script>

    <?php echo $__env->make('backend.partials.alert-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- vendors js  -->
    <?php echo $__env->yieldContent('script'); ?>

</body>

</html>
<?php /**PATH C:\laragon\www\khelardan\resources\views/backend/auth/master.blade.php ENDPATH**/ ?>