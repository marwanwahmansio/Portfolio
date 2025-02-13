<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Marwan Wahman">
    <title><?php echo $__env->yieldContent('title', 'Portfolio'); ?></title>


    <link rel="icon" type="image/png" href="assets/logoMW.png">
    <!-- Core CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!--font-awesome -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>" >
    <link rel="stylesheet" href="<?php echo e(asset('css/footer.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/header.css')); ?>">
   

</head>
<body>
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    <div class="main-content">
        <?php echo $__env->yieldContent('content'); ?> 
    </div>
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 

</body>
</html><?php /**PATH /var/www/html/resources/views/layouts/app.blade.php ENDPATH**/ ?>