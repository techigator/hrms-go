<!-- General CSS Files -->
<?php
    $logo=asset(Storage::url('uploads/logo/'));
$company_favicon=Utility::getValByName('company_favicon');
?>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title><?php echo e((Utility::getValByName('title_text')) ? Utility::getValByName('title_text') : config('app.name', 'HRMGo')); ?> - <?php echo $__env->yieldContent('page-title'); ?></title>
<link rel="icon" href="<?php echo e($logo.'/'.(isset($company_favicon) && !empty($company_favicon)?$company_favicon:'favicon.png')); ?>" type="image" sizes="16x16">

<link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap/css/bootstrap.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/fontawesome/css/all.min.css')); ?>">

<link href="<?php echo e(asset('assets/modules/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css"/>
<!-- CSS Libraries -->
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/jqvmap/dist/jqvmap.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/summernote/summernote-bs4.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/select2/dist/css/select2.css')); ?>">
<!-- Template CSS -->
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/components.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/default/render/bootstrap-toastr/toastr.min.css')); ?>">

<?php /**PATH C:\xampp\htdocs\hrms-go\resources\views/partial/Admin/head.blade.php ENDPATH**/ ?>