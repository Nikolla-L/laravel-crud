
<?php $__env->startSection('content'); ?>
  <h1>Edit Post</h1>
  <?php echo Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST']); ?>

  <div class="form-group">
    <?php echo e(Form::label('title', 'Title')); ?>

    <?php echo e(Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])); ?>

  </div>
  <div class="form-group">
    <?php echo e(Form::label('body', 'Body')); ?>

    <?php echo e(Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body'])); ?>

  </div>
  <?php echo e(Form::hidden('_method', 'PUT')); ?>

  <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

  <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\newApp\resources\views/posts/edit.blade.php ENDPATH**/ ?>