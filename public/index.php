<?php
namespace Lib;

require_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";

$main = new Main();
$main->init();
