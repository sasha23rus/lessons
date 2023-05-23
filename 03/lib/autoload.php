<?php
const LOCAL_PATH = '/03';
spl_autoload_register(
	callback: function ($classname) {
		$classname = str_replace('Lib\\', '', $classname);
		require_once $_SERVER['DOCUMENT_ROOT'].LOCAL_PATH.'/lib/Classes/'.$classname.'.php';
	}
);
