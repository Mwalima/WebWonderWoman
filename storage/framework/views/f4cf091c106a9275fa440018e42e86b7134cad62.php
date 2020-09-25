<!doctype html>
<html>
<head>
    <?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
<div class="navbar-nav navbar-inverse navbar-fixed-top">
    <?php echo $__env->make('partials.nav_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="register-info-wraper">
                <div id="register-info">
                    <div class="cont2">
                        <div class="thumbnail">
                            <img src="<?php echo e(asset('images/face2.png')); ?>" alt="Mwalima Peltenburg" class="img-circle">
                        </div><!-- /thumbnail -->
                        <h2>Mwalima Peltenburg</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="cont3">
                                <p><ok>Username:</ok><?php echo e($username); ?></p>
                                <p><ok>Mail:</ok><?php echo e($email); ?></p>
                                <p><ok>Location:</ok><?php echo e($location); ?></p>
                                <p><ok>Address:</ok><?php echo e($adres); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="cont3">
                                <p><ok>Registered:</ok><?php echo e($registed); ?></p>
                                <p><ok>Last Login:</ok><?php echo e($lastlogin); ?></p>
                                <p><ok>Phone:</ok><?php echo e($phonenumber); ?></p>
                                <p><ok>Mobile</ok><?php echo e($mobilephonenumber); ?></p>
                            </div>
                        </div>
                    </div><!-- /inner row -->
                    <hr>
                    <div class="cont2">
                        <h2>Choose Your Option</h2>
                    </div>
                    <br>
                    <div class="info-user2">
                        <span aria-hidden="true" class="li_user fs1"></span>
                        <span aria-hidden="true" class="li_settings fs1"></span>
                        <span aria-hidden="true" class="li_mail fs1"></span>
                        <span aria-hidden="true" class="li_key fs1"></span>
                        <span aria-hidden="true" class="li_lock fs1"></span>
                        <span aria-hidden="true" class="li_pen fs1"></span>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-sm-6 col-lg-6">
            <div id="register-wraper">
                <form id="register-form" class="form">
                    <legend>User Register</legend>

                    <div class="body">
                        <!-- first name -->
                        <label for="name">First name</label>
                        <input name="name" class="input-huge" type="text">
                        <!-- last name -->
                        <label for="surname">Last name</label>
                        <input name="surname" class="input-huge" type="text">
                        <!-- username -->
                        <label>Username</label>
                        <input class="input-huge" type="text">
                        <!-- email -->
                        <label>E-mail</label>
                        <input class="input-huge" type="text">
                        <!-- password -->
                        <label>Password</label>
                        <input class="input-huge" type="text">

                    </div>

                    <div class="footer">
                        <label class="checkbox inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1"> I agree with the terms &amp; conditions
                        </label>
                        <button type="submit" class="btn btn-success">Register</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<div id="footerwrap">
    <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div><!-- /footerwrap -->
</body></html>