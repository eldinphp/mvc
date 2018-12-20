<?php
class Autoloader
{

    protected static $array_of_folders = array("controllers", "models", "config", "data", "public", "views");


    public static function loader($class)
    {
        $file = strtolower($class) . '.php';
        foreach (self::$array_of_folders as $folder){

            $path = ".." . DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR . $file;
            if (file_exists($path)){
              require_once($path);
            }

        }

    }


}

?>
