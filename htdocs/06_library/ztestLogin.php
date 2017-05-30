<?php
  $zconn = mysqli_connect('localhost', 'root', 'z12345');
  mysqli_select_db($zconn, 'zopentutorials');
  //...작은따옴표를 입력해도 역슬래시(\)에 의해 ESCAPING 되어 문자로 보이게만 함.
  /*
  echo mysqli_real_escape_string($zconn, "11'11");
  echo "<br/>";
  */
  $_zname = mysqli_real_escape_string($zconn, $_GET['name']);
  $_zpassword = mysqli_real_escape_string($zconn, $_GET['password']);
  /*
  $zsql = "SELECT * FROM user WHERE name = '".$_GET['name']
          ."' AND password = '".$_GET['password']."'";*/
  $zsql = "SELECT * FROM user WHERE name = '".$_zname
          ."' AND password = '".$_zpassword."'";
  echo $zsql;
  echo "<br/>";
  $zresult = mysqli_query($zconn, $zsql);
  var_dump($zresult->num_rows);
  echo "<br/>";
  $zrow = mysqli_fetch_assoc($zresult);
  var_dump($zrow);
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
  <h1>PHP :: GET</h1>
  <?php
    #echo $_GET["사용자가 입력한 정보 중에 password의 값"];
    #http://localhost/phpjs/z08_02.php?zpassword=1234
    $password = $_GET['password'];
    //if($password == $zrow['password'])
    if(($zresult->num_rows)===0)
    {
      echo "누구신가요?";
    } else {
      echo "주인님 환영합니다";
    }
   ?>
</body>
</html>
