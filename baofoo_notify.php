<?php
if(!defined('ROOT_PATH'))
define('ROOT_PATH', str_replace('baofoo_notify.php', '', str_replace('\\', '/', __FILE__)));

$_GET['ac'] = "payment";
$_GET['at'] = "notify";
$_GET['plugcode'] = "baofoopay";
include ROOT_PATH."index.php";
?>