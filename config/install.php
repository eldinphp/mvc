<?php

require_once("config.php");

$table = "posts";



try{

  $database = new PDO("mysql:host=" . SERVERNAME . ";dbname=" . DB_NAME, USERNAME,PASSWORD);
  echo "<h1>Connection succeed. Creating tables now..<br>
        Please delete config/install.php file from your server now.

        </h1>";


}catch(PDOException $e){


  echo "Connection failed ..."  . $e->getMessage();

}



$query = "CREATE TABLE " . $table . " (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title TEXT NOT NULL,
    content TEXT NOT NULL,
    date TIMESTAMP
    )";

if ($database->exec($query)){

echo "Created the following table : "  . $table;

}else{

echo "<br>The table <b>" . $table . "</b> already exists, it seems..";

}

?>
