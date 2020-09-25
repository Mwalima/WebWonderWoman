<!doctype html>
<html>
<head>
    <?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
<div class="index_title">
    <h1><img src="/images/w_medium.png">ho to Contact</h1>
</div>

<!-- NAVIGATION MENU -->

<div class="navbar-nav navbar-inverse navbar-fixed-top">
    <?php echo $__env->make('partials.nav_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<div class="container">
    <div class="contact_form">
        <?php echo $__env->make('partials.contact_form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</div>
<div id="footerwrap">
    <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
</body>
</html>