<?php

namespace Lib;

class Request
{
	private array $ar_method = ["plus", "minus", "multiply", "divide", "equal", "plus", "square", "squareRoot"];
	private array $ar_pages = ['default_calculator', 'square_root'];
	
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
