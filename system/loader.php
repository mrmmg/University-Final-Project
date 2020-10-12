<?php
global $config;
ini_set('session.cookie_httponly', 1);
session_start();
date_default_timezone_set('Asia/Tehran');

include(getcwd()."/config.php");
include(getcwd()."/system/core.php");
include(getcwd()."/system/common.php");
include(getcwd()."/system/db.php");
include(getcwd()."/system/view.php");
include(getcwd()."/system/access.php");
//Loading Library...
include(getcwd()."/lib/jdf/jdf.php");

include(getcwd()."/lib/phpmailer/PHPMailer.php");
include(getcwd()."/lib/phpmailer/Exception.php");
include(getcwd()."/lib/phpmailer/SMTP.php");

//include(getcwd()."/locale/".$config['lang'].".php");
//include(getcwd()."/system/db.php");