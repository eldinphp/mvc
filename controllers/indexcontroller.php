<?php


// Name all of your custom controllers and methods
//with lowercase letters without using _ - etc.
class IndexController extends Controller{

  protected function show(){ // you can use any other function instead of show, for example edit, view etc
                          // but you will need to update the controller in the web.php file
    $template_uri = "../views/homepage.php"; //replace with your favorite template


    $post = new Post();
    $posts = $post->getAllPosts();
    echo render($template_uri, $posts);

    }

    protected function add(){

      if(!empty($_POST)){

        $title = $_POST['title'];
        $content = $_POST['content'];


        $result = Eloquent::saveThePost($title,$content);


      }

      $template_uri = "../views/add.php";
      echo render($template_uri);

    }

    protected function test(){

      echo "Testing a controller...";

    }







  }






?>
