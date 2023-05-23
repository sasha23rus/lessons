<?php
namespace Lib;

class Main
{
	private object $view;
	private object $request;
	private object $comput;

	public function __construct()
	{
		$this->view    = new View();
		$this->request = new Request();
		$this->comput  = new Compute();
	}
	
	/**
	 * @return void
	 */
	public function init()
	{
		$validated  = $this->request->validate();
		$calc_total = $this->comput->calculate($validated);
		$tplData    = [
			...$validated, 'total' => $calc_total
		];

		$result = $this->view->render($tplData, 'selector');
		$result .= $this->view->render($tplData, $tplData['page']);
		echo $result;
	}
	
}
