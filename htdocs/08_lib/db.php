<?php
  /*...중복제거의 수준.
    $zconn = mysqli_connect('localhost', 'root', 'z12345');
  	mysqli_select_db($zconn, 'zopentutorials');
  */
  //...함수로 변환.
  function zdb_init($zhost, $zuser, $zpw, $zdbname) {
    //$zconn = mysqli_connect('localhost', 'root', 'z12345');
    $zconn = mysqli_connect($zhost, $zuser, $zpw);
    mysqli_select_db($zconn, $zdbname);
    return $zconn;
  }
 ?>
