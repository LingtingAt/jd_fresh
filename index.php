<?php
session_start();
$Config=include_once 'config.php';
include_once 'Inherited/smarty/Smarty.class.php';
include_once 'function.php';
include_once 'Inherited/MainPDO.php';
include_once 'Inherited/Control.php';

$control = new Control();
$control::run();
?>

