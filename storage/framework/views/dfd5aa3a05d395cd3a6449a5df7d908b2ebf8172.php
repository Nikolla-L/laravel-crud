

<?php if(Session::has('error')): ?>
  <div class="alert alert-danger">
    <?php echo e(Session::get('error')); ?>

  </div>
<?php endif; ?>
<?php /**PATH C:\Users\User\Desktop\newApp\resources\views///inc/messages.blade.php ENDPATH**/ ?>