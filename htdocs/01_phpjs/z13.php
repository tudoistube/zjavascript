<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
  <h1>Function 의 입출력 :</h1>
  <h1>Javascript :</h1>
  <script>
    function a(input)
    {
      //document.write(input + 1);
      return input+1;
    }
    document.write(a(5));
    //prompt(a(5));
    //a; 라고 적으면 a 라는 변수가 됨.
  </script>


  <h1>PHP :</h1>
  <ul>
    <?php
      function a($input)
      {
        return $input + 1;
      }
      echo a(5);
   ?>
  </ul>

</body>
</html>
