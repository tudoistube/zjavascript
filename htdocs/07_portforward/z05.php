<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
  <!--...PHP 함수 htmlspecialchars("<a>"); 를 실행하면
         HTML Entity 를 구할 수 있어 편리함.-->
  &lt;a&gt;
  <br/>
  <?php
    echo htmlspecialchars('<a href="http://opentutorials.org/course/1">coding everybody</a>');
   ?>
   <br/>
   <?php
     echo htmlspecialchars('<script>alert("Surprise^^!!!")</script>');
    ?>
</body>
</html>
