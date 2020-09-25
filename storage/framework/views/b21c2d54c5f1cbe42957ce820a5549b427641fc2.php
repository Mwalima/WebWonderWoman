<i class="unread"></i>
<img class="avatar" src="<?php echo e(asset('images/face2_80X80.png')); ?>" alt="avatar">
<p class="sender"><?php echo e($name); ?></p>

<p class="message">
    <strong><?php echo e($subject); ?></strong>
    <?php $__currentLoopData = $message; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mess): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($mess); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="actions">
    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
</div>