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
                                <p><ok>Username:</ok><?php echo e($name); ?></p>
                                <p><ok>Mail:</ok><?php echo e($email); ?></p>
                                <p><ok>Location:</ok><?php echo e($city); ?></p>
                                <p><ok>Address:</ok><?php echo e($street); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="cont3">
                                
                                
                                
                                
                            </div>
                        </div>
                    </div><!-- /inner row -->
                </div>
            </div>

        </div>

        <div class="col-sm-6 col-lg-6">
            <div id="register-wraper">
                <form id="register-form" class="form">
                    <legend>User Register</legend>

                    <div class="body">
                        <?php echo Form::open(['route'=>'Users.store']); ?>


                        <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                            <?php echo Form::label('Name:'); ?>

                            <?php echo Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']); ?>

                            <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                        </div>
                        <div class="form-group <?php echo e($errors->has('lastname') ? 'has-error' : ''); ?>">
                            <?php echo Form::label('Lastname:'); ?>

                            <?php echo Form::text('lastname', old('lastname'), ['class'=>'form-control', 'placeholder'=>'Enter Name']); ?>

                            <span class="text-danger"><?php echo e($errors->first('lastname')); ?></span>
                        </div>

                        <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                            <?php echo Form::label('Email:'); ?>

                            <?php echo Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']); ?>

                            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                        </div>

                        <div class="form-group <?php echo e($errors->has('street') ? 'has-error' : ''); ?>">
                            <?php echo Form::label('Street:'); ?>

                            <?php echo Form::text('street', old('street'), ['class'=>'form-control', 'placeholder'=>'Enter streetname']); ?>

                            <span class="text-danger"><?php echo e($errors->first('street')); ?></span>
                        </div>

                        <div class="form-group <?php echo e($errors->has('housenumber') ? 'has-error' : ''); ?>">
                            <?php echo Form::label('Housenumber:'); ?>

                            <?php echo Form::text('housenumber', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter housenumber']); ?>

                            <span class="text-danger"><?php echo e($errors->first('housenumber')); ?></span>
                        </div>

                        <div class="form-group <?php echo e($errors->has('city') ? 'has-error' : ''); ?>">
                            <?php echo Form::label('City:'); ?>

                            <?php echo Form::text('city', old('city'), ['class'=>'form-control', 'placeholder'=>'Enter cityname']); ?>

                            <span class="text-danger"><?php echo e($errors->first('city')); ?></span>
                        </div>
                        <label class="checkbox inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1"> I agree with the terms &amp; conditions
                        </label>
                        <div class="form-group">
                            <button class="btn btn-success">Register!</button>
                        </div>
                        <?php echo Form::close(); ?>

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