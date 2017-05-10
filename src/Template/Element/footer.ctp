<?php use Cake\Core\Configure; ?>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b><?= __('Version Theme')?></b> <?= Configure::read('CakeAdminLTE.version')?>
    </div>
    <strong><?= Configure::read('CakeAdminLTE.copyright'); ?> <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> <?= __('All rights reserved.')?>
</footer>