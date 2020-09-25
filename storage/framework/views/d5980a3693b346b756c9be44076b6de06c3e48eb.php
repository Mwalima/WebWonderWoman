<div class="container">
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?>

    <?php echo Form::open(['route'=>'contactus.store']); ?>


    <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
        <?php echo Form::label('Name:'); ?>

        <?php echo Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']); ?>

        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
    </div>

    <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
        <?php echo Form::label('Email:'); ?>

        <?php echo Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']); ?>

        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
    </div>

    <div class="form-group <?php echo e($errors->has('message') ? 'has-error' : ''); ?>">
        <?php echo Form::label('Message:'); ?>

        <?php echo Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']); ?>

        <span class="text-danger"><?php echo e($errors->first('message')); ?></span>
    </div>

    <div class="form-group">
        <button class="btn btn-success">Contact US!</button>
    </div>

    <?php echo Form::close(); ?>


</div>
</div><!-- /container -->