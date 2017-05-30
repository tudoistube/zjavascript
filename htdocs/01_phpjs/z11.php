<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
  <h1>Array</h1>
  <h1>Javascript :</h1>
  <ul>
    <script>
      list = new Array("박철순", "김시진", "장효조", "백인철", "최동원", "윤동균");
      i = 0;
      while (i < list.length) {
        document.write("<li>"+list[i]+"</li>");
        i++;
      }
    </script>
  </ul>


  <h1>PHP :</h1>
  <ul>
    <?php
      $list = array("박철순", "김시진", "장효조", "백인철", "최동원", "윤동균");
      $i = 0;
      while ($i < count($list))
      {
        echo "<li>".$list[$i]."</li>";
        $i = $i + 1;
      }
   ?>
  </ul>

</body>
</html>
