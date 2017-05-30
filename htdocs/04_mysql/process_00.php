<?php
  //echo $_POST['title'];
  $zconn = mysqli_connect('localhost', 'root', 'z12345');
  mysqli_select_db($zconn, 'zopentutorials');
  $zsql="INSERT INTO `topic`(title, description, author, created) VALUES('".
        $_POST['title'] ."', '". $_POST['description'] ."', '". $_POST['author'] ."', now())";
  echo $zsql;
  $zresult = mysqli_query($zconn, $zsql);
  header('Location:http://localhost/04_mysql/index.php');
 ?>
