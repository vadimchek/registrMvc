<?php

class Router
{

  // var for path
  private $routes;

  //get path of routes.php
  public function __construct()
  {
    $routesPath = ROOT . '/config/routes.php';
    $this->routes = include($routesPath);
  }

  /*
  * Return request string
  */
  private function getURI()
  {
    if ($_SERVER['REQUEST_URI']) {
      return trim($_SERVER['REQUEST_URI'], '/');
    }
  }

  public function run()
  {

    $uri = $this->getURI();

    foreach ($this->routes as $uriPattern => $path) {
      if (preg_match("~$uriPattern~", $uri)) {

        $segments = explode('/', $path);

        $controllerName = ucfirst(array_shift($segments).'Controller');
        $actionName = 'action'.ucfirst(array_shift($segments));

        $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

        if (file_exists($controllerFile)){
          include_once ($controllerFile);
        }

        $controllerObject = new $controllerName;
        $result = $controllerObject->$actionName();

        if($result != null) break;

      }
    }

    //echo "Class Router, method run";
  }

}
