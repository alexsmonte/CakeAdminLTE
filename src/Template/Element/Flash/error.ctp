<div class="alert alert-danger alert-dismissible" onclick="this.classList.add('hidden');">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-ban"></i> <?= __('Error') ?>!</h4>
    <?= h($message) ?>
</div>