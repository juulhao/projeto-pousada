<?php 

class App {

	private $controller;
	private $action;

	public function run() {
		$url = explode('index.php', $_SERVER['PHP_SELF']);
		$url = end($url);

		$this->verificaUrl($url);
	}

	public function verificaUrl($url) {

		if (! empty($url)) {
			$url = explode('/', $url);
			array_shift($url);

			$this->controller = ucfirst($url[0]).'Controller';
			array_shift($url);

			if (isset($url[0])) {
				$this->action = $url[0];
				array_shift($url);
			} else {
				$this->action = 'index';
			}

			$params = $url;

		} else {
			$this->controller = 'SiteController';
			$this->action = 'index';
			$params = array();
		}

		require_once 'App/Controller.php';

		$newController = $this->controller;
		$newAction     = $this->action;

		$c = new $newController;
		
		call_user_func_array(array($c, $newAction), $params);
	}
}