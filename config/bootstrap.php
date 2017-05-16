<?php
use Cake\Core\Configure;

if (!Configure::read('CakeAdminLTE.projectName')) {
    Configure::write('CakeAdminLTE.projectName', 'AdminLTE');
}

if (!Configure::read('CakeAdminLTE.projectNameMini')) {
    Configure::write('CakeAdminLTE.projectNameMini', 'A-LTE');
}

if (!Configure::read('CakeAdminLTE.description')) {
    Configure::write('CakeAdminLTE.description', 'CakePHP AdminLTE Theme: the rapid development php framework');
}

if (!Configure::read('CakeAdminLTE.version')) {
    Configure::write('CakeAdminLTE.version', '2.3.8');
}

if (!Configure::read('CakeAdminLTE.copyright')) {
    Configure::write('CakeAdminLTE.copyright', 'Copyright &copy; 2014-2016');
}

if (!Configure::read('CakeAdminLTE.showSidebarConfig')) {
    Configure::write('CakeAdminLTE.showSidebarConfig',false);
}

if (!Configure::read('CakeAdminLTE.showNavbar')) {
    Configure::write('CakeAdminLTE.showNavbar',false);
}

if (!Configure::read('CakeAdminLTE.showFormSearch')) {
    Configure::write('CakeAdminLTE.showFormSearch',false);
}

if (!Configure::read('CakeAdminLTE.showSidebarUser')) {
    Configure::write('CakeAdminLTE.showSidebarUser',true);
}

if (!Configure::read('CakeAdminLTE.showSidebarMenu')) {
    Configure::write('CakeAdminLTE.showSidebarMenu',true);
}

if (!Configure::read('CakeAdminLTE.showUserAccount')) {
    Configure::write('CakeAdminLTE.showUserAccount',true);
}

if (!Configure::read('CakeAdminLTE.showBrand')) {
    Configure::write('CakeAdminLTE.showBrand',true);
}


