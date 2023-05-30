<?php
namespace Lib;

class View
{
	/**
	 * @param array $data
	 * @param string $template
	 * @return false|string
	 */
	public function render(Array $data, string $template = 'default_calculator'):false|string
	{
		ob_start();
		include_once $_SERVER['DOCUMENT_ROOT'].LOCAL_PATH.'/view/'.$template.'.php';
		return ob_get_clean();
	}
}
