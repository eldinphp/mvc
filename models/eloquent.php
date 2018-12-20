<?php



class Eloquent{

protected static $database;

public static function initDatabase(){

  self::$database = new PDO("mysql:host=" . SERVERNAME . ";dbname=" . DB_NAME, USERNAME,PASSWORD);

}

    public static function getAllPosts(){

      self::initDatabase();
      $query = self::$database->prepare("SELECT title,content,date FROM posts");
      $query->execute();

      return $result = $query->fetchAll(PDO::FETCH_ASSOC);


    }

    public static function saveThePost($title,$content){
      self::initDatabase();
      $table = "posts";
      $title = $title;
      $content = $content;



      $query = "INSERT INTO `posts`  (`id`, `title`, `content`, `date`) VALUES (NULL, :title, :content, CURRENT_TIMESTAMP);";

      // $user = $_POST["user"];
      // $addUser = $db->prepare("INSERT INTO `users` (`user_name`) VALUES (?)");
      // $addUser->execute(array($user));
      //
      // $addUser = $db->execute("INSERT INTO `users` (`user_name`) VALUES (?)", array($user) );


      $stmt = self::$database->prepare($query);
      $stmt->bindParam(':title', $title);
      $stmt->bindParam(':content', $content);
      $result = $stmt->execute();

      if ($result){

        header("Location: home");

      }


    }



}

?>
