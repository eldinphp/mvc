<?php

include_once("web.php");

class Route{

    public static $routes = array();

    public static function get($route, $controller){
        //register these routes from web.php
        static::$routes[$route] = $controller;

    }




}





?>
