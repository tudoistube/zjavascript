<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css"
           href="http://localhost/06_library/style.css">
</head>
<body id="ztarget">
    <header>
		    <h2><a href="http://localhost/06_library/index.php"><img src="https://yt3.ggpht.com/-thKQ_YaH8MM/AAAAAAAAAAI/AAAAAAAAAAA/Eaihw8GhhlE/s88-c-k-no-mo-rj-c0xffffff/photo.jpg" alt="생활코딩실습"></a></h2>
        <h1>2DoIs2Be and JoyWins ^_____^!!!</h1>
    </header>
    <nav>
      <ol>
        <?php
          require('../06_lib/db.php');
          require('../06_config/config.php');
          /*...보안을 위해 별도의 파일에서 배열로 받음.
          $zconn = zdb_init('localhost', 'root', 'z12345', 'zopentutorials');*/
          $zconn = zdb_init($zconfig["zhost"], $zconfig["zuser"], $zconfig["zpw"], $zconfig["zdbname"]);
          $zresult = mysqli_query($zconn, 'SELECT * FROM topic');

          while ($zrow = mysqli_fetch_assoc($zresult)) {
            //var_dump($zrow); //...받은 값 출력하기.
            echo '<li><a href="http://localhost/06_library/index.php?id=0'.$zrow['id'].' ">' . $zrow['title'] . '</a></li>' . "\n";
            //echo "<br/>";
          }
         ?>
      </ol>
    </nav>

    <div id="zcontrol">
      <input type="button" value="green"
             onclick="document.getElementById('ztarget').className='zgreen' "/>
      <input type="button" value="blue"
             onclick="document.getElementById('ztarget').className='zcyan' "/>
      <a href="http://localhost/06_library/write.php">글쓰기</a>
    </div>

    <article>
      <form class="" action="process.php" method="post">
        <p>Title : </p>
        <input type="text" name="title" value="">
        <p>Write : </p>
        <input type="text" name="author" value="">
        <p>Description : </p>
        <textarea name="description" id="description"></textarea>
        <input type="hidden" role="uploadcare-uploader"
               data-images-only="true" />
        <input type="submit" name="zsubmit">
      </form>
    </article>


    <script>
      UPLOADCARE_PUBLIC_KEY = "7d50b6c88a07e12b5912";
    </script>
    <script charset="utf-8" src="//ucarecdn.com/libs/widget/2.10.3/uploadcare.full.min.js"></script>
    <script>
      //...role 값이 uploadcare-uploader 인 태그를 업로드 위젯으로 만들기.
      var singleWidget = uploadcare.SingleWidget('[role=uploadcare-uploader]');
      /*...이 위젯을 통해 업로드가 끝났을 때,
           id 값이 description 인 태그의 값 뒤에 업로드한 이미지 파일의 주소를
           이미지 태그와 함께 첨부함.*/
      singleWidget.onUploadComplete(function(info){
        document.getElementById('description').value =
                 document.getElementById('description').value
                 + '<img src="'
                 + info.cdnUrl
                 + '">';
      });

    </script>
</body>
</html>
