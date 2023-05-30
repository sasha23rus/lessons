<?php

use Lib\Main;

require_once $_SERVER['DOCUMENT_ROOT'].'/04/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . LOCAL_PATH . '/lib/autoload.php';

$main = new Main();
$main->init();
