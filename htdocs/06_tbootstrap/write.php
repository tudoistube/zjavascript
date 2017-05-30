<!DOCTYPE html>
<html>
<head>
     <!--...S.Bootstrap 필수코드.ref http://getbootstrap.com/getting-started/ -->
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <!-- Bootstrap -->
     <link href="http://localhost/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
     <!--...E.Bootstrap 필수코드.ref http://getbootstrap.com/getting-started/ -->

     <link rel="stylesheet" type="text/css"
           href="http://localhost/06_tbootstrap/style.css">
</head>
<body id="ztarget">
    <!--Containers : http://getbootstrap.com/css/#images -->
    <div class="container">
      <header class="jumbotron text-center">
  		    <h2>
              <a href="http://localhost/06_tbootstrap/index.php">
              <img src="https://yt3.ggpht.com/-thKQ_YaH8MM/AAAAAAAAAAI/AAAAAAAAAAA/Eaihw8GhhlE/s88-c-k-no-mo-rj-c0xffffff/photo.jpg"
                   id="zlogo" alt="생활코딩실습" class="img-circle">
              </a>
          </h2>
          <h1>2DoIs2Be and JoyWins ^_____^!!!</h1>
      </header>

      <div class="row">
        <nav class="col-md-3">
          <!--http://getbootstrap.com/components/#nav-->
          <ol class="nav nav-pills nav-stacked">
            <?php
              require('../06_lib/db.php');
              require('../06_config/config.php');
              /*...보안을 위해 별도의 파일에서 배열로 받음.
              $zconn = zdb_init('localhost', 'root', 'z12345', 'zopentutorials');*/
              $zconn = zdb_init($zconfig["zhost"], $zconfig["zuser"], $zconfig["zpw"], $zconfig["zdbname"]);
              $zresult = mysqli_query($zconn, 'SELECT * FROM topic');

              while ($zrow = mysqli_fetch_assoc($zresult)) {
                //var_dump($zrow); //...받은 값 출력하기.
                echo '<li><a href="http://localhost/06_tbootstrap/index.php?id='.$zrow['id'].' ">'
                     . htmlspecialchars($zrow['title'])
                     . '</a></li>' . "\n";
                //echo "<br/>";
              }
             ?>
          </ol>
        </nav>

        <div class="col-md-9">
          <div id="zcontrol">
            <div class="btn-group" role="group" aria-label="...">
              <input type="button" value="green"
                     onclick="document.getElementById('ztarget').className='zgreen' " class="btn btn-default  btn-lg"/>
              <input type="button" value="blue"
                     onclick="document.getElementById('ztarget').className='zcyan' " class="btn btn-default  btn-lg"/>
            </div>

            <a href="http://localhost/06_tbootstrap/write.php" class="btn btn-success  btn-lg">글쓰기</a>
          </div>
          <hr>

          <article>
            <form class="" action="process.php" method="post">
              <div class="form-group">
                <label for="frmTitle">Title : </label>
                <input type="text" class="form-control" name="title"
                       id="frmTitle" placeholder="제목을 적어주세요.">
              </div>
              <div class="form-group">
                <label for="frmAuthor">Author : </label>
                <input type="text" class="form-control" name="author"
                       id="frmAuthor" placeholder="작성자를 적어주세요.">
              </div>
              <div class="form-group">
                <label for="frmDesc">Description : </label>
                <textarea class="form-control" name="description"
                          rows="5"
                          id="frmDesc" placeholder="내용을 적어주세요.">
                </textarea>
              </div>
              <input type="hidden" role="uploadcare-uploader"
                     data-images-only="true" />
              <input type="submit" name="zsubmit" class="btn btn-default  btn-lg"/>
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
              document.getElementById('frmDesc').value =
                       document.getElementById('frmDesc').value
                       + '<img src="'
                       + info.cdnUrl
                       + '">';
            });

          </script>
        </div>
      </div>
    </div>



    <!--...S.Bootstrap 필수코드.ref http://getbootstrap.com/getting-started/ -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
    <!--...E.Bootstrap 필수코드.ref http://getbootstrap.com/getting-started/ -->
</body>
</html>
