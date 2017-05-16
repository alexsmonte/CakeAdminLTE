<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <?= $this->Html->image('avatar-user.png', ['alt' => 'User Image', 'class' => 'user-image', 'fullBase' => true]); ?>
        <span class="hidden-xs">Alexander Pierce</span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
            <?= $this->Html->image('avatar-user.png', ['alt' => 'User Image', 'class' => 'img-circle', 'fullBase' => true]); ?>
            <p>User Teste - Cargo<small>Member since Nov. 2012</small></p>
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <?= $this->Html->link(__('Profile'),'#',['class' => 'btn btn-default btn-flat', 'fullBase' => true]); ?>
            </div>
            <div class="pull-right">
                <?= $this->Html->link(__('Sign out'),'#',['class' => 'btn btn-default btn-flat', 'fullBase' => true]); ?>
            </div>
        </li>
    </ul>
</li>