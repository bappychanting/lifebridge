<?php inherits('layouts/master'); ?>

<?php startblock('title') ?> Welcome <?php endblock() ?>

<?php startblock('content') ?>

<div class="container">
    <h3 class="text-center my-5 text-muted">
      <span class="oi oi-dashboard pr-2"></span>
      <?php echo APP_NAME; ?>
    </h3>
</div>

<?php endblock() ?>