<?php
  //echo $_POST['title'];
  $zconn = mysqli_connect('localhost', 'root', 'z12345');
  mysqli_select_db($zconn, 'zopentutorials');

  $zsql="SELECT * FROM user WHERE name = '" .$_POST['author'] ."'";
  /*
  echo $zsql;
  echo "<br/>";
  */

  $zresult = mysqli_query($zconn, $zsql);
  var_dump($zresult);
  /*
  echo "<br/>";
  echo $zresult->num_rows; //...조회결과 갯수.
  echo "<br/>";
  */
  if($zresult->num_rows ==0)
  {
      //...user 테이블에 사용자 추가.
      $zsql_i="INSERT INTO `user`(name, password) VALUES('"
              .$_POST['author'] ."', '111111')";
      echo $zsql_i;
      mysqli_query($zconn, $zsql_i);
      /*...user-id 필드는 auto_increment 되므로 mysqli_insert_id($zconn) 는
           직전에 추가된 행의 id 값 구함.
           https://www.w3schools.com/php/func_mysqli_insert_id.asp
      */
      $user_id = mysqli_insert_id($zconn);
  } else {
      $zrow = mysqli_fetch_assoc($zresult);
      //...zrow 내용을 볼 수 있음.
      //var_dump($zrow);
      $user_id = $zrow['id'];

  }

  //exit; //...프로그램 종료.

  $zsql="INSERT INTO `topic`(title, description, author, created) VALUES('".
        $_POST['title'] ."', '". $_POST['description'] ."', '". $user_id ."', now())";
  //echo $zsql;
  $zresult = mysqli_query($zconn, $zsql);
  header('Location:http://localhost/05_security/index.php');
 ?>
