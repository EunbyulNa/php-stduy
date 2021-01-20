<?php

function print_title() {
  if( isset($_GET['id']) ){
  echo $_GET['id'];
  }else{
  echo "WELCOME";
  }
}

function print_desc() {
  if( isset($_GET['id']) ){
    echo file_get_contents("data/".$_GET['id']);
  }else {
    echo "Hello, PHP";
  }
}

function print_list() {
  $list = scandir('data');
  $i = 0;
  while( $i < count($list) ) {
    if($list[$i] !== '.'){
      if($list[$i] !== '..'){
    echo "<li><a href=\"Index.php?id=$list[$i]\">$list[$i]</a></li>";
  }
}
    $i= $i+1;

  }

}




 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
     <?php
      print_title();
      ?>
  </title>
  </head>
  <body>

   <h1><a href="Index.php">WEB</a></h1>

   <ul>
   <?php
    print_list();
    ?>
  </ul>

  <a href="create.php">Create</a>
   <form class="" action="create_process.php" method="post">
     <p>
       <input type="text" placeholder="Title" name="title" value="">
     </p>
     <p>
      <textarea name="description"></textarea>
     </p>
     <p>
       Submit<input type="submit" name="submit" value="">
     </p>

   </form>

  </body>
</html>
