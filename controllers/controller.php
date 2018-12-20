<?php

class Controller{



        public static function explodeController($controller){
          //separates controller into 2 pieces
          // for example IndexController@show is separated into
          // $array('IndexController', 'show')
          $controller_array = [];
          $controller_array = explode("@", $controller,2);
          return $controller_array;
        }

        public static function executeTheControllerMethod($controller, $method){


          $object = new $controller;
          $object->{$method}();

        }





}




?>
