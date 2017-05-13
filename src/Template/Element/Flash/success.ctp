<div class="message success" onclick="this.classList.add('hidden')"></div>
<div class="alert alert-success alert-dismissible" onclick="this.classList.add('hidden')"
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i> <?= __('Success') ?>!</h4>
    <?= h($message) ?>
</div>
