
<?php $__env->startSection('content'); ?>
  <h1 class="pt-2 pb-5">Posts</h1>
  <?php if(count($posts) > 1): ?>
    <div class="card">
      <ul class="list-group list-group-flush">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="list-group-item">
            <h3><a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h3>
            <small>Written on <?php echo e($post->created_at); ?></small>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
  <?php else: ?>

  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\newApp\resources\views/posts/index.blade.php ENDPATH**/ ?>