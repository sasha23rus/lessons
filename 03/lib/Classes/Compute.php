<?php
namespace Lib;

class Compute
{
	/**
	 * @param array $data
	 * @return float|string
	 */
	public function calculate(Array $data):float|string
	{
		if (empty($data)) {
			return 0.0;
		}

		$action = $data['action'];
		$x = (int) ($data['a'] ?? 0);
		$y = (int) ($data['b'] ?? 0);
		
		return $this->{$action}($x, $y);
	}
	
	/**
	 * @param $a
	 * @param $b
	 * @return float
	 */
	public function plus($a, $b):float
	{
		return ($a + $b);
	}
	
	
	/**
	 * @param $a
	 * @param $b
	 * @return float
	 */
	private function minus($a, $b):float
	{
		return ($a - $b);
	}
	
	
	/**
	 * @param $a
	 * @param $b
	 * @return float
	 */
	private function multiply($a, $b):float
	{
		return ($a * $b);
	}
	
	
	/**
	 * @param $a
	 * @param $b
	 * @return string|float
	 */
	private function divide($a, $b):string|float
	{
		return ( $b == 0 ) ? 'Invalid input B' : ($a / $b);
	}
	
	
	/**
	 * @param $a
	 * @param $b
	 * @return string
	 */
	private function equal( $a, $b):string
	{
		return ($a == $b) ? 'A = B' : 'A != B';
	}
	
	
	/**
	 * @param $a
	 * @return float
	 */
	private function square($a):float
	{
		return ($a * $a);
	}
	
	
	/**
	 * @param $a
	 * @return float
	 */
	private function square_root($a):float
	{
		return sqrt($a);
	}
}
