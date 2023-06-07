<?php
namespace Lib;

require_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";
//require_once $_SERVER['DOCUMENT_ROOT'] . "/lib/Main.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";

echo 'index.php';
$main = new Main();
var_dump($main);
$main->init();
