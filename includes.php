<?php

define('ROOT_DIR', dirname(__FILE__));
define('ROOT_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(ROOT_DIR))));
define('VIEWS', ROOT_URL . '/views');
define('CONTROLLERS', ROOT_URL . '/controllers');
define('MODELS', ROOT_URL . '/models');
define('PUBLIC', ROOT_URL . '/public');
define('DATA', ROOT_URL . '/data');




require_once("config/config.php");
require_once("functions.php");
//require_once("config/db.php"); RUN ONLY ONCE TO CREATE POSTS TABLE
require_once("models/eloquent.php");
require_once("models/post.php");
require_once("controllers/controller.php");
require_once("controllers/indexcontroller.php");
require_once("controllers/route.php");
require_once("controllers/web.php");
require_once("controllers/application.php");




?>
