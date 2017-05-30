<?php
  require_once('conn.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="zbody" id="ztarget">
    <header>
      <h1><a href="/09_Refactoring/index.php">생활코딩 Javascript& PHP</a></h1>
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
               echo '<li><a href="/09_Refactoring/index.php?id='.$zrow['id'].' ">'
                   . htmlspecialchars($zrow['title'])
                   . '</a></li>';
               /*
               echo '<li><a href="/09_Refactoring/index.php?id='.$zrow['id'].' ">'
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
      <a href="/09_Refactoring/write.php" class="btn btn-success  btn-lg">글쓰기</a>
    </div>
  </body>
</html>
