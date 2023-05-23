<?php
const LOCAL_PATH = '/03';
spl_autoload_register(
    function ($classname) {
        $classname = str_replace('Lib\\', '', $classname);
        include_once $_SERVER['DOCUMENT_ROOT'].LOCAL_PATH.'/lib/Classes/'.$classname.'.php';
    }
);
