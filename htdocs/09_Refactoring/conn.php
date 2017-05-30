<?php
  require('db.php');
  require('config.php');
  $zconn = zdb_init($zconfig["zhost"], $zconfig["zuser"], $zconfig["zpw"], $zconfig["zdbname"]);
 ?>
