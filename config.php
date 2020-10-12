<?php

if(!defined('test')){echo "403 - Forbidden Access"; exit;}
global $config;

$config['db']['host'] = 'localhost';
$config['db']['user'] = 'root';
$config['db']['pass'] = '';
$config['db']['name'] = 'uni_project';

$config['salt'] = 'asdp[safd/afowf[lewe][efwelf';

$config['base'] = '/';

$config['lang'] = 'fa';

$config['route'] = array(
    '/login' => '/user/login',
    '/logout' => '/user/logout',
    '/register' => '/user/register',
    '/dashboard' => '/user/panelShow',
    '/adduser' => '/admin/addUser',
    '/users' => '/admin/users',
    '/report' => '/user/report',
    '/reportadmin'=>'/admin/report',
    '/setting' => '/admin/setting', //change it to /user/setting
    '/addscore' => '/admin/addScore',
    '/showaddscore' => '/admin/showAddScore',
    '/status' => '/admin/status', //change it to /user/status
    '/resetmail' => '/user/resetEmail',
    '/accesslevel'=>'/admin/accessLevel',
    '/addnewuser'=>'/user/addNewUser',
    '/removeuser'=>'/admin/deleteUser',
    '/chnagepass'=>'/user/changeUserPass',
);
