<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="http://localhost/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      nav {
        border: 1px solid blue;
      }
      article {
        border: 1px solid green;
      }
    </style>
  </head>
  <body>
    <h1>Hi, JoyWins and Bootstrap!</h1>
    <!--...bootstrap 은 col 을 화면의 폭을 12등분 함 -->
    <div class="row">
      <nav class="col-md-2">
        <ul>
          <li>html</li>
          <li>css</li>
          <li>javascript</li>
        </ul>
      </nav>
      <article class="col-md-10">
        HTML is...
      </article>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
  </body>
</html>
