<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css"
           href="http://localhost/03_php/style.css">
</head>
<body id="ztarget">
    <header>
		    <h2><a href="http://localhost/03_php/index.php"><img src="https://yt3.ggpht.com/-thKQ_YaH8MM/AAAAAAAAAAI/AAAAAAAAAAA/Eaihw8GhhlE/s88-c-k-no-mo-rj-c0xffffff/photo.jpg" alt="생활코딩실습"></a></h2>
        <h1>2DoIs2Be and JoyWins ^_____^!!!</h1>
    </header>
    <nav>
      <ol>
        <?php
          echo file_get_contents("zlist.txt");
         ?>
      </ol>
    </nav>

    <div id="zcontrol">
      <input type="button" value="green"
             onclick="document.getElementById('ztarget').className='zgreen' "/>
      <input type="button" value="blue"
             onclick="document.getElementById('ztarget').className='zcyan' "/>
    </div>

    <article>
      <?php
        //...파라미터가 없는 경우 오류 방지.
        if(empty($_GET['id'])===false)
        {
          echo file_get_contents("zarticle" .$_GET['id'].".txt");
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
