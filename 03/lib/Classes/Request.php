<?php

namespace Lib;

class Request
{
	private $ar_method = ["plus", "minus", "multiply", "divide", "equal", "plus", "square", "square_root"];
	private $ar_pages = ['default_calculator', 'square_root'];
	
	/**
	 * @return array
	 */
	public function validate():array
	{
		$result = [];
		foreach ($_POST as $key => $value) {
			$result[$key] = is_numeric($value) ? intval($value) : htmlspecialchars($value);
		}

		$result['action'] = (in_array($_POST['action'], $this->ar_method)) ? $_POST['action'] : 'plus';
		$result['page'] = (in_array($_POST['page'], $this->ar_pages))? $_POST['page'] : 'default_calculator';

		return $result;
	}
}
