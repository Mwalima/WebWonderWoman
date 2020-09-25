<!doctype html>
<html>
<head>
    <?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
<div class="index_title">
    <h1>Find the loo app</h1>
</div>
<div class="navbar-nav navbar-inverse navbar-fixed-top">
    <?php echo $__env->make('partials.nav_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<div class="container">
    <a src="https://play.google.com/store/apps/details?id=com.apps.created.findtheloo"></a>

</div>

</body>
<div id="footerwrap">
    <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
</html>