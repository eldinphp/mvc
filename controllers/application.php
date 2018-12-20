<?php

class Application{

      public $currentPath;
      public $routes;
      public $controllerWithMethod;
      public $controller;
      public $method;

      function __construct(){
      // Checks if the route exists and if the method exists
      $this->setCurrentPath();
      $this->getRoutes();
      $this->getController();
      $this->getControllerMethod();
      $this->runTheControllerMethod();
      }


      protected function setCurrentPath(){

            $array = explode("/",(trim($_SERVER['REQUEST_URI'],"/")));


            $position = array_search('mvc', $array);
            $position = $position + 2;
            // $position is a position of "mvc" folder in the path
            // after it finds the folder where app files are,
            // it deletes the previous part of the path
            $this->currentPath = implode("/", array_slice(explode("/",(trim($_SERVER['REQUEST_URI'],"/"))),$position));

            if (empty($this->currentPath)){$this->currentPath = "home";}
      }

      protected function getRoutes(){
            $this->routes = Route::$routes;
      }

      protected function getController(){

        if (isset($this->routes[$this->currentPath])){
          $this->controllerWithMethod = $this->routes[$this->currentPath];
        }

      }

      protected function getControllerMethod()
      {
        $routeForThisController = Controller::explodeController($this->controllerWithMethod);
        if (!isset($routeForThisController[1])){
          echo "Please check your routes in controllers/web.php</br>";
          echo "Or go to <a href='home'>/home</a>";
          exit();
        }
        $this->controller = $routeForThisController[0];
        $this->method = $routeForThisController[1];

      }


      protected function runTheControllerMethod(){

        Controller::executeTheControllerMethod($this->controller, $this->method);

      }



}




?>
