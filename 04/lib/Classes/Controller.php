<?php
namespace Lib;

class Controller
{
	public Compute $compute;
	public View $view;
	
	public function __construct()
	{
		$this->compute = new Compute();
		$this->view = new View();
	}
	
	/**
	 * @return string
	 */
	public function homeAction(): string
	{
		return $this->view->render([], 'selector.tpl');
	}
	
	/**
	 * @param Request $request
	 * @return string
	 */
	public function calcAction(Request $request): string
	{
		$validated  = $request->validate();
		$total = $this->compute->calculate($validated);
		$tplData = [ ...$validated, 'total' => $total ];
		
		$render = $this->view->render([], 'selector.tpl');
		$render.= $this->view->render($tplData, 'calculator.tpl');
		
		return $render;
	}
	
	/**
	 * @param Request $request
	 * @return string
	 */
	public function squareAction(Request $request): string
	{
		$validated  = $request->validate();
		$total = $this->compute->calculate($validated);
		$tplData = [ ...$validated, 'total' => $total ];
		
		$render = $this->view->render([], 'selector.tpl');
		$render.= $this->view->render($tplData, 'square.tpl');
		
		return $render;
	}
	
	
	/**
	 * @return string
	 */
	public function notfoundAction(): string
	{
		$render = $this->view->render([], 'selector.tpl');
		$render.= $this->view->render([], '404.tpl');
		
		return $render;
	}
}
