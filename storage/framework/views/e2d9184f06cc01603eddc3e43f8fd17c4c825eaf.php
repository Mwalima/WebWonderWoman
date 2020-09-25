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
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?>
        <?php if(Session::has('failure')): ?>
            <div class="alert alert-failure">
                <?php echo e(Session::get('failure')); ?>

            </div>
        <?php endif; ?>
        <div class="col-sm-6 col-lg-6">
            <div id="register-wraper">
                <form id="register-form" class="form">
                    <legend>User Register</legend>

                    <div class="body">
                        <?php echo Form::open(['route'=>'users.store']); ?>


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

                        <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                            <?php echo Form::label('Password:'); ?>

                            <?php echo Form::password('password', old('password'), ['class'=>'form-control', 'placeholder'=>'create password']); ?>

                            <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
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

                        <div class="form-group <?php echo e($errors->has('zipcode') ? 'has-error' : ''); ?>">
                            <?php echo Form::label('Zipcode:'); ?>

                            <?php echo Form::text('zipcode', old('zipcode'), ['class'=>'form-control', 'placeholder'=>'Enter zipcode']); ?>

                            <span class="text-danger"><?php echo e($errors->first('street')); ?></span>
                        </div>

                        <div class="form-group <?php echo e($errors->has('city') ? 'has-error' : ''); ?>">
                            <?php echo Form::label('City:'); ?>

                            <?php echo Form::text('city', old('city'), ['class'=>'form-control', 'placeholder'=>'Enter cityname']); ?>

                            <span class="text-danger"><?php echo e($errors->first('city')); ?></span>
                        </div>
                        <div class="form-group <?php echo e($errors->has('country') ? 'has-error' : ''); ?>">
                            <?php echo Form::label('Country:'); ?>

                            <?php echo Form::text('country', old('country'), ['class'=>'form-control', 'placeholder'=>'Enter Country if differnt then NL']); ?>

                            <span class="text-danger"><?php echo e($errors->first('country')); ?></span>
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