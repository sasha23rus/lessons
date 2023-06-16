<?php
	
	namespace Lib;
	
	use Illuminate\Database\Eloquent\ModelNotFoundException;
	use Phroute\Phroute\Dispatcher;
	use Phroute\Phroute\Exception\HttpRouteNotFoundException;
	use Phroute\Phroute\RouteCollector;
	
class Router
{
	
	private object $router;
	private ?string $data;
	
	public function __construct()
	{
		$this->router = new RouteCollector();
	}
	
	/**
	 * @return void
	 */
	public function init(): void
	{
		$this->addRoutes();
		$this->dispatch();
	}
	
	/**
	 * @return void
	 */
	private function addRoutes(): void
	{
		$this->router->get('/', [ 'Lib\Controller\HomeController', 'index' ]);
		$this->router->get('/articles', [ 'Lib\Controller\ArticleController', 'index' ]);
		$this->router->get('/article/{id}', [ 'Lib\Controller\ArticleController', 'detail' ]);
		$this->router->get('/404', [ 'Lib\Controller\ErrorController', 'index' ]);
	}
	
	/**
	 * @return void
	 */
	private function dispatch(): void
	{
		$dispatcher = new Dispatcher($this->router->getData());
		//$url = str_replace(LOCAL_PATH, '', $_SERVER['REQUEST_URI']);
		$url = $_SERVER['REQUEST_URI'];//у меня через домен
		
		try {
			$this->data = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
		} catch (HttpRouteNotFoundException | ModelNotFoundException) {
			Http::redirect('/404');
		}
	}
	
	/**
	 * @return string|null
	 */
	public function getData(): ?string
	{
		return $this->data;
	}
}
