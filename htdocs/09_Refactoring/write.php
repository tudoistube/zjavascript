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
        <form class="" action="process.php" method="post">
          <p>
            <label for="title">Title : </label>
            <input type="text" name="title">
          </p>
          <p>
            <label for="author">Author : </label>
            <input type="text" name="author">
          </p>
          <p>
            <label for="description">Description :</label>
            <textarea id="description" name="description" rows="8" cols="80"></textarea>
          </p>
          <p>
            <input type="submit" value="submit">
          </p>
        </form>
      </article>

      <input type="button" value="green"
             onclick="document.getElementById('ztarget').className='zgreen' " class="btn btn-default  btn-lg"/>
      <input type="button" value="navy"
             onclick="document.getElementById('ztarget').className='znavy' " class="btn btn-default  btn-lg"/>
      <a href="/09_Refactoring/write.php" class="btn btn-success  btn-lg">글쓰기</a>
    </div>
  </body>
</html>
