<?php
  //print_r($_POST)
  //...Array ( [title] => a [author] => b [description] => ccc ) 라고 출력됨.

  //...DB 접속.
  require_once('conn.php');

  //...저자가 user 테이블에 존재하는지 여부를 체크.
  $author = mysqli_real_escape_string($zconn, $_POST['author']);
  //$zsql = "SELECT * FROM `user` WHERE `name` = '" .$author ."'";
  $zsql = "SELECT * FROM `user` WHERE `name` = '{$author}'";
  //echo $zsql;
  $zresult = mysqli_query($zconn, $zsql);

  if($zresult->num_rows > 0)
  {
    //...if 존재하면, user.id 를 구함.
    $zrow = mysqli_fetch_assoc($zresult);
    //...zrow 내용을 볼 수 있음.
    //var_dump($zrow);
    $user_id = $zrow['id'];
  }else {
    //...else 없으면, 저자를 user 테이블에 추가하고 user.id 를 구함.
    $zsql_i="INSERT INTO `user` (`id`, `name`) VALUES (NULL, '{$author}');";
    //echo $zsql_i;
    $zresult_i = mysqli_query($zconn, $zsql_i);
    $user_id = mysqli_insert_id($zconn);
  }
  //var_dump($zresult->num_rows);
  echo "user id : " .$user_id;

  //...제목, 저자의 user.id, 본문 등을 topic 테이블에 추가함.
  $title = mysqli_real_escape_string($zconn, $_POST['title']);
  $description = mysqli_real_escape_string($zconn, $_POST['description']);
  $zsql_i="INSERT INTO `topic`
          (`id`, `title`, `description`, `author`, `created`)
          VALUES (NULL, '{$title}', '{$description}', '{$user_id}', now());";
  echo $zsql_i;
  $zresult_i = mysqli_query($zconn, $zsql_i);

  //...index.php 로 페이지 이동함.
  header('Location:/09_Refactoring/index.php');
 ?>
