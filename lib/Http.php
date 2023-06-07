<?php

namespace Lib;

class Http
{
	public static function redirect($page)
	{
		header('Location: ' . LOCAL_PATH . $page);
		exit();
	}
}
