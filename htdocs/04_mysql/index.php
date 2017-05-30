<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css"
           href="http://localhost/04_mysql/style.css">
</head>
<body id="ztarget">
    <header>
		    <h2><a href="http://localhost/04_mysql/index.php"><img src="https://yt3.ggpht.com/-thKQ_YaH8MM/AAAAAAAAAAI/AAAAAAAAAAA/Eaihw8GhhlE/s88-c-k-no-mo-rj-c0xffffff/photo.jpg" alt="생활코딩실습"></a></h2>
        <h1>2DoIs2Be and JoyWins ^_____^!!!</h1>
    </header>
    <nav>
      <ol>
        <?php
          $zconn = mysqli_connect('localhost', 'root', 'z12345');
          mysqli_select_db($zconn, 'zopentutorials');
          $zresult = mysqli_query($zconn, 'SELECT * FROM topic');

          while ($zrow = mysqli_fetch_assoc($zresult)) {
            //var_dump($zrow); //...받은 값 출력하기.
            echo '<li><a href="http://localhost/04_mysql/index.php?id='.$zrow['id'].' ">' . $zrow['title'] . '</a></li>' . "\n";
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
      <a href="http://localhost/04_mysql/write.php">글쓰기</a>
    </div>

    <article>
      <?php
        if(empty($_GET['id'])===false)
        {
          $zsql = "SELECT topic.id, topic.title, user.name, topic.description "
                  ." FROM topic LEFT JOIN user ON topic.author = user.id "
                  ." WHERE topic.id = " .$_GET['id'];
          $zresult = mysqli_query($zconn, $zsql);
          $zrow = mysqli_fetch_assoc($zresult);
          echo '<h2>' . $zrow['title'] . '</h2>';
          echo '<p>' . $zrow['name'] . '</p>';
          echo $zrow['description'];
        }
       ?>

      <!--...S.Tawk Comments -->
      <div id="disqus_thread"></div>
      <script>
      /**
      *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
      *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
      /*
      var disqus_config = function () {
      this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
      this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
      };
      */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://ztestdisqus-1.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
      </script>
      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
      <!--...E.Tawk Comments -->

      <!--...S.Tawk Chatting -->
      <!--Start of Tawk.to Script-->
      <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/5922aeb676be7313d291dd38/default';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
      </script>
      <!--End of Tawk.to Script-->
      <!--...E.Tawk Chatting -->
    </article>
</body>
</html>
