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
    $zpassword = $_GET['zpassword'];
    if($zpassword == "1111")
    {
      echo "주인님 환영합니다";
    } else {
      echo "누구신가요?";
    }
   ?>
</body>
</html>
