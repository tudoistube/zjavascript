<?php
  require('../08_lib/db.php');
  require('../08_config/config.php');
  $zconn = zdb_init($zconfig["zhost"], $zconfig["zuser"], $zconfig["zpw"], $zconfig["zdbname"]);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body {
        margin: 0;
      }
      body.znavy {
        background-color: navy;
        color: yellowgreen;
      }
      body.zgreen {
        background-color: yellowgreen;
        color: navy;
      }
      header {
        border-bottom: 1px solid yellowgreen;
        padding-left: 25px;
      }
      nav {
        border-right: 1px solid;
        width: 300px;
        height: 700px;
        float: left;
      }
      nav ol {
        margin: 0px;
        padding: 20px;
        list-style: none;
      }
      nav ol li {
        padding: 5px;
      }
      #content {
        padding-left: 20px;
        float: left;
        width: 400px;
      }
    </style>
  </head>
  <body class="zbody" id="ztarget">
    <header>
      <h1><a href="/08_practice1/index.php">생활코딩 Javascript& PHP</a></h1>
    </header>
    <nav>
      <ol>
          <?php
            $zsql = "SELECT * FROM `topic`";
            $zresult = mysqli_query($zconn, $zsql);

            /*
            $zrow = mysqli_fetch_assoc($zresult);
            print_r($zrow);
            echo "<br>";
            $zrow = mysqli_fetch_assoc($zresult);
            print_r($zrow);
            echo "<br>";
            $zrow = mysqli_fetch_assoc($zresult);
            print_r($zrow);
            var_dump($zrow);
            echo "<br>";
            */

            while ($zrow = mysqli_fetch_assoc($zresult)) {
               //var_dump($zrow); //...받은 값 출력하기.
               //echo "<br>";
               echo '<li><a href="/08_practice1/index.php?id='.$zrow['id'].' ">'
                   . htmlspecialchars($zrow['title'])
                   . '</a></li>';
               /*
               echo '<li><a href="/08_practice1/index.php?id='.$zrow['id'].' ">'
                    . htmlspecialchars($zrow['title'])
                    . '</a></li>' . "\n";
               //echo "<br/>";
               */
             }
           ?>
      </ol>
    </nav>
    <div id="content">
      <article>
<?php
  if(empty($_GET['id']))
  {
    echo 'Welcome';
  }else {
    $id = mysqli_real_escape_string($zconn, $_GET['id']);
    $zsql = 'SELECT topic.id, topic.title, topic.description, user.name, topic.created '
            .' FROM topic LEFT JOIN user ON topic.author = user.id'
            .' WHERE topic.id = ' .$id;
    $zresult = mysqli_query($zconn, $zsql);
    $zrow = mysqli_fetch_assoc($zresult);
  ?>
        <h2><?=htmlspecialchars($zrow['title'])?></h2>
        <div><?=htmlspecialchars($zrow['created'])?> | <?=htmlspecialchars($zrow['name'])?></div>
        <div><?=htmlspecialchars($zrow['description'])?></div>
<?php } ?>
      </article>
      <input type="button" value="green"
             onclick="document.getElementById('ztarget').className='zgreen' " class="btn btn-default  btn-lg"/>
      <input type="button" value="navy"
             onclick="document.getElementById('ztarget').className='znavy' " class="btn btn-default  btn-lg"/>
      <a href="/08_practice1/write.php" class="btn btn-success  btn-lg">글쓰기</a>
    </div>
  </body>
</html>
