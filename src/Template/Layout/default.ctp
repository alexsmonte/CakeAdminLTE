<?php
use Cake\Core\Configure;

$cakeDescription = Configure::read('CakeAdminLTE.description');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta(
        'favicon.png',
        $this->Url->image('CakeAdminLTE.favicon.png',['fullBase' => true]),
        ['type' => 'icon']
    );
    ?>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap v3.3.7 -->
    <?= $this->Html->css('CakeAdminLTE.bootstrap.min.css',['fullBase' => true]) ?>
    <!-- Font Awesome v4.7.0 -->
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',['fullBase' => true]) ?>
    <!-- Ionicons v2.0.1-->
    <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',['fullBase' => true]) ?>
    <!-- Theme style -->
    <?= $this->Html->css('CakeAdminLTE.AdminLTE.min.css',['fullBase' => true]) ?>
    <!-- AdminLTE Skins -->
    <?= $this->Html->css('CakeAdminLTE.skins/skin-blue.min.css',['fullBase' => true]) ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<div class="wrapper">

    <header class="main-header">
        <?php if (Configure::read('CakeAdminLTE.showBrand')) echo $this->element('CakeAdminLTE.brand'); ?>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <?php if (Configure::read('CakeAdminLTE.showNavbar')) echo $this->element('CakeAdminLTE.navbar'); ?>
                    <!-- User Account: style can be found in dropdown.less -->
                    <?php if (Configure::read('CakeAdminLTE.showUserAccount')) echo $this->element('CakeAdminLTE.userAccount'); ?>
                    <!-- Control Sidebar Toggle Button -->
                    <?php if (Configure::read('CakeAdminLTE.showSidebarConfig')) { ?>
                    <li><a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </header>


    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <?php if (Configure::read('CakeAdminLTE.showSidebarUser')) echo $this->element('CakeAdminLTE.sidebarUser');  ?>
            <!-- search form -->
            <?php if (Configure::read('CakeAdminLTE.showFormSearch')) echo $this->element('CakeAdminLTE.formSearch');  ?>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <?php if (Configure::read('CakeAdminLTE.showSidebarMenu')) echo $this->element('CakeAdminLTE.sidebarMenu');  ?>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <?= $this->element('CakeAdminLTE.pageHeader'); ?>

        <!-- Main content -->
        <section class="content">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?= $this->element('CakeAdminLTE.footer'); ?>

    <!-- Control Sidebar -->
    <?php if (Configure::read('CakeAdminLTE.showSidebarConfig')) echo  $this->element('CakeAdminLTE.sideBarConfig'); ?>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>

<!-- jQuery 2.2.3 -->
<?= $this->Html->script('plugins/jQuery/jquery-2.2.3.min.js'); ?>
<!-- jQuery UI 1.11.4 -->
<?= $this->Html->script('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js'); ?>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<?= $this->Html->script('bootstrap.min.js'); ?>
<?= $this->Html->script('plugins/slimScroll/jquery.slimscroll.min.js'); ?>
<?= $this->Html->script('plugins/fastclick/fastclick.js'); ?>
<?= $this->Html->script('app.js'); ?>

<?= $this->fetch('scriptBottom'); ?>

</body>
</html>