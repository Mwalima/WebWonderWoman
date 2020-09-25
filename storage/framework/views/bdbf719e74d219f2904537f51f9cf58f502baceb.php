<!doctype html>
<html>
<head>
    <?php echo $__env->make('partials.header_invite', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
<?php echo $__env->make('components.invitation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>