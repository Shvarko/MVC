<?php

class Router
{

	private $routes;

	public function __construct()
	{
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);
	}

// Return type

	private function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI'])) {
		return trim($_SERVER['REQUEST_URI'], '/'); //удаляет слеши из начала и конца строки
		}
	}

	public function run()
	{
		$uri = $this->getURI();

		foreach ($this->routes as $uriPattern => $path) {

			if(preg_match("~$uriPattern~", $uri)) {

/*				echo "<br>Где ищем (запрос, который набрал пользователь): ".$uri;
				echo "<br>Что ищем (совпадение из правила): ".$uriPattern;
				echo "<br>Кто обрабатывает: ".$path; */

				// Получаем внутренний путь из внешнего согласно правилу.

				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);
				//в uri заменяет uriPattern на path

/*				echo '<br>Нужно сформулировать: '.$internalRoute.'<br>'; */

				$segments = explode('/', $internalRoute);

				$controllerName = array_shift($segments).'Controller';
				//забирает себе только первое значение, а остальное оставляет в segments
				$controllerName = ucfirst($controllerName);

				$actionName = 'action'.ucfirst(array_shift($segments));

				$parameters = $segments;

				$controllerFile = ROOT . '/controllers/' .$controllerName. '.php';
				if (file_exists($controllerFile)) {
					include_once($controllerFile);
				}

				//create object, сall method
				$controllerObject = new $controllerName;

				$result = call_user_func_array(array($controllerObject, $actionName), $parameters);

				// Если метод контроллера успешно вызван, завершаем работу роутера
				if ($result != null) {break;}
			}
		}
	}
}