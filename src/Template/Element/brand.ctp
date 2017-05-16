<?php use Cake\Core\Configure; ?>
<!-- Logo -->
<a href="<?= $this->Url->build("/"); ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><?= Configure::read('CakeAdminLTE.projectNameMini'); ?></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><?= Configure::read('CakeAdminLTE.projectName'); ?></span>
</a>