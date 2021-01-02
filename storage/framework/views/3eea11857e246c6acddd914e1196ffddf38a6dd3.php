<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="author" content="Net It Ltd" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Page Title -->
    <title><?php echo e(isset($page_title) ? $page_title : 'Freelancers Incubator'); ?></title>

    <!-- Favicon and Touch Icons -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />    <link href="<?php echo e(asset('assets')); ?>/images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="<?php echo e(asset('assets')); ?>/images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="<?php echo e(asset('assets')); ?>/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="<?php echo e(asset('assets')); ?>/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="<?php echo e(asset('assets')); ?>/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->


    <link href="<?php echo e(asset('assets')); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets')); ?>/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets')); ?>/css/animate.css" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets')); ?>/css/css-plugin-collections.css" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link href="<?php echo e(asset('assets')); ?>/css/menuzord-megamenu.css" rel="stylesheet" />
    <link id="menuzord-menu-skins" href="<?php echo e(asset('assets')); ?>/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="<?php echo e(asset('assets')); ?>/css/style-main.css" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets')); ?>/css/style.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="<?php echo e(asset('assets')); ?>/css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="<?php echo e(asset('assets')); ?>/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href=<?php echo e(asset('assets')); ?>/css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="<?php echo e(asset('assets')); ?>/js//revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets')); ?>/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets')); ?>/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" />

    <!-- CSS | Theme Color -->
    <link href="<?php echo e(asset('assets')); ?>/css/colors/theme-skin-color-set2.css" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="<?php echo e(asset('assets')); ?>/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/js/jquery-ui.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="<?php echo e(asset('assets')); ?>/js/jquery-plugin-collection.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/js/style2.js"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="<?php echo e(asset('assets/')); ?>/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo e(asset('assets/')); ?>/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
    <script>
        window.Laravel = {
        !!json_encode([
            'csrfToken' => csrf_token(),
        ]) !!
        };

    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="has-side-panel side-panel-right fullwidth-page">
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div id="wrapper" class="clearfix">
    <!-- Header -->

    <!-- Page Content -->
<?php echo $__env->yieldContent('main'); ?>
<!-- /.container -->
    <!-- Footer -->

</div>
<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Chart-->
<script src="<?php echo e(asset('assets/')); ?>/js/chart.js"></script>
<!-- JS | Custom script for all pages -->
<script src="<?php echo e(asset('assets/')); ?>/js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
  (Load Extensions only on Local File Systems !
   The following part can be removed on Server for On Demand Loading) -->
<script src="<?php echo e(asset('assets')); ?>/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js' async defer></script>

</body>
<?php echo Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']); ?>

<button type="submit"><?php echo app('translator')->getFromJson('global.logout'); ?></button>
<?php echo Form::close(); ?>


</html>