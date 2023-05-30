<?php
namespace Lib;

class Request
{

	/**
	 * @return array
	 */
	public function validate():array
	{
		$result = [];

		foreach ($_POST as $key => $value) {
			$result[$key] = is_numeric($value) ? intval($value) : htmlspecialchars($value);
		}

		return $result;
	}
}
