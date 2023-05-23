<?php
namespace Lib;

class Main
{
	private object $view;
	private object $request;
	private object $compute;

	public function __construct()
	{
		$this->view    = new View();
		$this->request = new Request();
		$this->compute  = new Compute();
	}
	
	/**
	 * @return void
	 */
	public function init(): void
	{
		$validated  = $this->request->validate();
		$calc_total = $this->compute->calculate($validated);
		$tplData    = [
			...$validated, 'total' => $calc_total
		];

		$result = $this->view->render($tplData, 'selector');
		$result .= $this->view->render($tplData, $tplData['page']);
		echo $result;
	}
}
