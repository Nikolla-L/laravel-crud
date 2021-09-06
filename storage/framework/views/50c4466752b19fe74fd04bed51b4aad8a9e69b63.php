
<?php $__env->startSection('content'); ?>
  <a href="/posts" class="btn btn-outline-primary my-3">&#171; Go Back</a>
  <h1><?php echo e($post->title); ?></h1>
  <p><?php echo e($post->body); ?></p>
  <hr>
  <small>Written on <?php echo e($post->created_at); ?></small>
  <?php echo Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']); ?>

  <?php echo e(Form::hidden('_method', 'DELETE')); ?>

  <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

  <?php echo Form::close(); ?>

  <a href="/posts/<?php echo e($post->id); ?>/edit" class="float-right btn btn-info text-white mx-3">Edit</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\newApp\resources\views/posts/show.blade.php ENDPATH**/ ?>