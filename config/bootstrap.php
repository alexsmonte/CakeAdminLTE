<?php
use Cake\Core\Configure;

if (!Configure::read('CakeAdminLTE.projectName')) {
    Configure::write('CakeAdminLTE.projectName', 'AdminLTE');
}

if (!Configure::read('CakeAdminLTE.projectNameMini')) {
    Configure::write('CakeAdminLTE.projectNameMini', 'A-LTE');
}


if (!Configure::read('CakeAdminLTE.description')) {
    Configure::write('CakeAdminLTE.description', 'CakePHP: the rapid development php framework');
}

if (!Configure::read('CakeAdminLTE.version')) {
    Configure::write('CakeAdminLTE.version', '2.3.8');
}
if (!Configure::read('CakeAdminLTE.copyright')) {
    Configure::write('CakeAdminLTE.copyright', 'Copyright &copy; 2014-2016');
}


