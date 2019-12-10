<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo e($title); ?></title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!--
	Medigo Template
	http://www.templatemo.com/preview/templatemo_460_medigo
    -->

    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo e(\URL::asset('bootstrap/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(\URL::asset('css/misc.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(\URL::asset('css/blue-scheme.css')); ?>">
    <script src="https://kit.fontawesome.com/48e6621b57.js" crossorigin="anonymous"></script>

    <!-- JavaScripts -->
    <script src="<?php echo e(\URL::asset('js/jquery-1.10.2.min.js')); ?>"></script>
    <script src="<?php echo e(\URL::asset('js/jquery-migrate-1.2.1.min.js')); ?>"></script>

    <link rel="shortcut icon" href="<?php echo e(\URL::asset('/images/favicon2.ico')); ?>" type="image/x-icon" />

</head>