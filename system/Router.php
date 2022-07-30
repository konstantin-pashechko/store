<?php

class Router
{
	private $routes;
	private $uri;

	function __construct()
	{
		$routesPath = ROOT . '/config/routes.php';
		$this->routes = include($routesPath);
		$this->uri = trim($_SERVER['REQUEST_URI'],'/');
	}

	private function getControllerName()
	{
		if(explode('/',$this->uri)[0] == 'admin') {
			$obj = new AdminController(explode('/',$this->uri));
			$obj->model = new AdminModel('site');
			$obj->router();
			die;
		}

		if(explode('/',$this->uri)[0] == 'ajax'){
			$obj = new AjaxController;
			$obj->model = new Ajax('site');
			$obj->index();
			die;

		} else {

			return 'SiteController';
		}
	}

	private function getActionName()
	{
		return 'actionIndex';
	}

	private function getVew()
	{
		if($this->uri){
			return $this->uri;
		}
		return 'SITE';
	}

	private function getParam()
	{
		$param = explode('/',$this->uri);
		$last = array_pop($param);
		if(array_pop($param)=='search'){
			return $last;
		}
		return false;
	}

	public function run()
	{
		if ($this->routes[$this->uri]){
			$controllerName = ucfirst(explode('/',$this->routes[$this->uri])[0]).'Controller';
			$actionName = 'action'.ucfirst(explode('/',$this->routes[$this->uri])[1]);
		} else {
			$controllerName = $this->getControllerName();
			$actionName = $this->getActionName();
		}
		//$view = lcfirst(explode('Controller',$controllerName)[0]); //получаем название контекста из названия контроллера
		$model = (explode('Controller',$controllerName)[0]); //получаем название модели из названия контроллера
		//$obj = new $controllerName;
		$obj = new SiteController;
		$obj->view = $this->getVew();
		if(class_exists($model)){
			$obj->model = new $model($view);
		} else {
			$obj->model = new Site($view);
		}

		$obj->$actionName($param = $this->getParam());
	}
}
