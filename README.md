생활코딩 :: 웹애플리케이션 만들기.
============

## 생활코딩 :: 웹애플리케이션 만들기 ['생활코딩 :: 웹애플리케이션 만들기' 강좌 보고 실습한 소스](https://opentutorials.org/course/1688 "a good basic lecture on javascript and CSS" )  


https://opentutorials.org/course/1688/10245
PHP 를 이번 기회에 이해하고, 스프링에다가 프론트를 접목해보고 싶습니다. 감사합니다^_____^!!!
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9331
start Small!!! 명심하겠습니다^_____^
/*----------------------------------------------------------------*/


start Small!
1차적으로 중요한 것은 '완성'이다.
'완성'의 가장 큰 적은 예산, 기술이 아닌 '욕심'이다.
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9332
욕심을 줄이고 작은것부터 직접 만들고 싶습니다. ㅋㅋ전략 어떤건지 궁금합니다^^???
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9333
구상과 기획...칼로 물베기.
UI 모델링.
모델링.
모델링 도구.
http://pencil.evolus.vn
http://opentutorials.org/course/221/1416
https://balsamiq.com
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9334
팀버너스리... 오늘 첨 알았습니다^ ^;;;
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9408
한방에 서버쪽을 다 설치해주는 bitnami 라는 것도 있었네요^_____^

http://projects.apache.org/projects/http_server.html
싸이트가 안열림.

bitnami : Apache + PHP + MySql 한번에 설치함.
https://bitnami.com/stack/wamp
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9337
MySql 이미 설치했지만 bitnami 설치하면서 댓글 답니다^ ^;;;
페이지 경로 :
   C:\Bitnami\wampstack-5.6.30-2\apache2\htdocs
   http://localhost/index.html
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9410
MySql 이 설치되어서 그런지 경고창이 뜹니다^^;;;
Problem running post-install step.
Installation may not complete correctly.
Error creating directory C:/Bitnami/wampstack-5.6.30-2/apache2/cgi-bin

설치는 되는데 Apache 가 실행이 안되네요.
[Fri May 19 10:58:29.588310 2017] [ssl:warn] [pid 7296:tid 280] AH01909: localhost:443:0 server certificate does NOT include an ID which matches the server name

Bitnami 실행 및 MySql, Apache 시작 및 구성 버튼으로 제어함.
C:\Bitnami\wampstack-5.6.30-2\manager-windows.exe
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9339
머리 식히는 시간인거 같아요...^^;;
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9340
HTML5 사전 감사합니다^_____^
https://opentutorials.org/course/1058
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9345
의미별로 묶어서 감싸도록 해야겠습니다^_____^
MySql 지우고 비트나미 설치하니까 되네요...
여기까지 실습한 소스들 Git 모음.
https://github.com/codingeverybody/makewebapp/commit/158b2a8c55fb06d2b63b9c39082836dfe156d395
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9346
아톰 정말 강력한거 같습니다. 이런 에디터를 만드는 수업 있으면 좋겠습니다^_____^
아톰강좌.
https://opentutorials.org/module/1579
아톰 파일과 창 관리.
https://youtu.be/ZNmEuGKsCMY
https://docs.emmet.io/
https://docs.emmet.io/cheat-sheet/
div + p + ul>li*3

^ : n 번만큼 상위.
	nav>ul>li^a
	
	nav>ul>li^^a : 두단계 위에 나란히 추가함.

반복 :
	a*10

그룹핑 :
	nav>ul>(li>1)*5
	
ID부여 :
	nav#myNavi>li>a
	
Class부여 :	
	nav>ul>(li.myList>a)*5
	
속성추가 :
	a[target="_blank" title="ztitle"]
	
Text추가 :
	li>a>{myText}

일련번호추가 :
	ul>li.item$*5

Ctrl + \ : 트리뷰 보이기 토글.
Ctrl + SpaceBar : 추천어 제시.
Ctrl + G : 라인 바로 가기.
Ctrl + Alt + 화살표(→) : 내용입력태그로 자동 이동함.

크롬개발자도구에서 모양을 바꿔서 미리 볼 수 있음.

MySql 지우고 비트나미 설치하니까 되네요...
Git 강좌.
https://opentutorials.org/course/1492
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9351
Git 실습 소스.
https://github.com/codingeverybody/makewebapp/commit/5c8f3907c38e010f3cd5f0e4166c447e8658631d?diff=unified
	
크롬 확장 프로그램 : Stylebot.

생코 CSS 최신 강좌.
https://opentutorials.org/course/2418
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9364
PHP 는 새롭고 Javascript 는 무섭지만 "할수있다!!!" 외치며 계속 갑니다^^;;
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9365
설정에서 헤멜까 걱정했는데 딱 짚어주셔서 감사합니다^_____^

개발작업시, 오류를 화면에 출력하기 :
개발작업시, 수정내역 바로 반영하기 :
C:\ZEnv\Bitnami\wampstack-5.6.30-2\php\php.ini 파일 열기 :
	display_errors = Off 을 display_errors = On 으로 변경하기.
	opcache.enable=1 을 opcache.enable=0 으로 변경하기.
	
C:\ZEnv\Bitnami\wampstack-5.6.30-2\manager-windows.exe 실행 :
	Apache Web Server Restart 할 것.	
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9366
2가지 언어를 동시에 배울 수 있다니... 감사합니다^_____^

C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\phpjs 폴더 생성하기.
C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\phpjs\z01.php 파일 생성하기.
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9367
PHP 에서는 문자를 더할때는 점(.)을 찍는군요. 감사합니다^_____^

C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\phpjs\z02.php 파일 생성하기.
Javascript 와 PHP 로 문자 표기하기 : 큰따옴표.
Javascript 로 숫자 표기하기 : 큰따옴표로 묶으면 문자가 됨.
PHP 로 숫자 표기하기 : 큰따옴표로 묶어도 숫자가 됨.
					   숫자를 더할때는 더하기(+)를 사용함.
                       문자를 더할때는 점(.)을 사용함.
					   
GitHub 실습 소스 :
https://github.com/codingeverybody/makewebapp/commit/bc2a832f5e19a56c6d1b1c5c8dccf95b2227ec38	
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9368
점점 진도가 느려집니다^^;;; 감사합니다^_____^

C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\phpjs\z03.php 파일 생성하기.
Javascript 로 디버그하기 : 크롬 검사.
PHP 로 디버그하기 : C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\logs\error.log 파일 참조.
					   
GitHub 실습 소스 :
https://github.com/codingeverybody/makewebapp/commit/62ca8e852feb653e500818e607095d4214a4d3db
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9369
$변수 이렇게 쓰는군요^^;;; 감사합니다^_____^

PHP 변수 : $VAR=VALUE;

C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\phpjs\z04.php 파일 생성하기.
					   
GitHub 실습 소스 :
https://github.com/codingeverybody/makewebapp/commit/59fd1fffb3841f0e5d12b198ade8cb87c39d7e2a
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9370
비교할때 var 띄우고 _dump(1==1); 하면 안되는군요. 감사합니다^_____^

C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\phpjs\z05.php 파일 생성하기.
PHP 비교에서는 echo 대신 var_dump() 를 사용함.
<?php
    var_dump(1==1);
   ?>
					   
GitHub 실습 소스 :
https://github.com/codingeverybody/makewebapp/commit/29b55506a01907e7e0f177a6ef905216cb0534f6
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9371
두가지 언어의 기초를 같이 배울 수 있어서 기쁩니다 . 감사합니다^_____^

C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\phpjs\z06.php 파일 생성하기.
php 소스 코드를 변경한 후에 반영되지 않는 문제가 있을 수 있습니다. 이런 경우  

윈도우 사용자의 경우 아래의 파일을 열어주세요. 
C:\Bitnami\wampstack(버전번호)\php\php.ini

이 파일에서 opcache.enable=0 라고 되어 있는 부분을 opcache.enable=1로 변경 하신 후에 Apache를 재시작하시면 됩니다.  (아파치 재시작 방법을 모르시면 서버제어 참고)
만약 위의 경우로도 해결되지 않으면 웹브라우저에 저장된 임시 파일의 문제일수도 있습니다. 이런 경우 아래의 방법으로 웹페이지를 리로드 해주세요. 
Windows: ctrl + F5
					   
GitHub 실습 소스 :
https://github.com/codingeverybody/makewebapp/commit/ee7f4e31d8f61fa4f64324246500bf972ac99ab3
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9372
전달되온 변수값을 받을때는 $_GET["?다음의 변수명"]; 으로 하는군요. 감사합니다^_____^

C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\phpjs\z08_01.php 파일 생성하기.
C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\phpjs\z08_02.php 파일 생성하기.

$zpassword = $_GET['zpassword'];
					   
GitHub 실습 소스 :
https://github.com/codingeverybody/makewebapp/commit/21b8c8f59d02b2dc5ec78a6c894e48916ed896d2
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9374
감사합니다^_____^

GitHub 실습 소스 :
https://github.com/codingeverybody/makewebapp/commit/045ca88401621d87b09d666d5a918d80a00b3edf
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9375
인도의 엘리베이터는 0층이 있다고 하셔서 인도에 가고 싶어집니다. 감사합니다^_____^

C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\phpjs\z10.php 파일 생성하기.
C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\phpjs\z11.php 파일 생성하기.

배열의 길이를 구할때 Javascript 와 PHP :
	document.write(list.length);
	echo count($list);

GitHub 실습 소스 :
https://github.com/codingeverybody/makewebapp/commit/e5728c57c92e86aea4771c3fd332716d6f26af67
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9377
이고잉님 교재 만드실때 톱니바퀴는 직접 그리신건지, 프레지도 쓰시는건지, 
운영체제마다 어떻게 한 화면에 강의를 담으시는지, 슬라이드에 쓰이는 폰트도 너무 이쁘고...
교재 만드는 방법도 한번 강의로 만들어 주시면 정말 도움될거 같습니다. 감사합니다^_____^

함수의 입출력 :
C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\phpjs\z12.php 파일 생성하기.
C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\phpjs\z13.php 파일 생성하기.

GitHub 실습 소스 :
https://github.com/codingeverybody/makewebapp/commit/b1567b04df929fa6229ff61fa875d89624d4d9de
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9379
강의실에서 잼있는 교양과목을 듣는 듯한 기분이 들었습니다. 감사합니다^_____^
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9380
박하사탕을 눈으로 먹는듯 뻥뚫리는 느낌을 갈망합니다. 감사합니다^_____^
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9381
무료로 쓸 수 있는 Disqus 랑 tawk 있어서 참 유용할거 같습니다. 감사합니다^____^

Ctrl + Alt + 화살표(→) : 내용입력태그로 자동 이동함.

무료 댓글 지원 :
Disqus :
	https://disqus.com/
	Get Started...
	I watnt to install Disqus on my site...
	사용할 웹사이트 이름 넣고, Universal Code 선택하고 소스 복사하기...
	자신의 소스에 붙이고 새로고침하면 됨.
LiveRe :
	국산.

무료채팅 :
	https://www.tawk.to/
	tudoistube@gmail.com
	z!!!!#
	DashBoard :: Admin 에서 Widget Code 복사해서 붙여넣으면 채팅창 생성됨.
	https://youtu.be/bHvEqNIW9sE
	
GitHub 실습 소스 :	
https://github.com/codingeverybody/makewebapp/commit/c7ed799f2cd1c054d81c731f7511fe09cd56bd01	
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9383
'무지한 스승' 이라는 책말고 '일상기술연구소팟캐스트'를 들어봐야 겠습니다. 
즐겁게 절망감을 못느끼고 진도가 술술 잘나가면 좋겠습니다^^;; 감사합니다^____^
http://www.podbbang.com/ch/11810?e=22094865


C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\03_php 폴더 생성하기.
C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\03_php\z01.php 파일 생성하기.
	<?php
	  echo $_GET['id'] .", " .$_GET['name'];
	 ?>
http://localhost/03_php/z01.php?id=01&name=JoyWins


C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\03_php\z01.txt 피일 생성하기.
C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\03_php\z02.php 파일 생성하기.
    <?php
      echo file_get_contents("z01.txt");
     ?>
http://localhost/03_php/z02.php
	
C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\03_php\z02.txt 파일 생성하기.
	<?php
      echo file_get_contents($_GET['id'].".txt");
     ?>
http://localhost/03_php/z02.php?id=z01
	 

C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\03_php\index.php 파일 생성해서
index.php 파일 하나로 주소창의 파라미터를 받아서 파일들을 불러오게 함.

	<ol>
		<?php
		  echo file_get_contents("zlist.txt");
		?>
	</ol>
	  

    <article>
      <?php
        //...파라미터가 없는 경우 오류 방지.
        if(empty($_GET['id'])===false)
        {
          echo file_get_contents("zarticle" .$_GET['id'].".txt");
        }        
       ?>
    </article>	  
	  
C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\03_php\zlist.txt
C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\03_php\zarticle01.txt
......
C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\03_php\zarticle04.txt	

http://localhost/03_php/index.php?id=02

GitHub 실습 소스 :	
https://github.com/codingeverybody/makewebapp/commit/c7ed799f2cd1c054d81c731f7511fe09cd56bd01	
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9386
비밀번호를 까먹어서 다시 설치했습니다^^;; 감사합니다^____^

MySql Monitor 실행하기.
Win + R :: CMD
C:\ZEnv\Bitnami\wampstack-5.6.30-2\mysql\bin\mysql.exe

C:\ZEnv\Bitnami\wampstack-5.6.30-2\mysql\bin>mysql -hlocalhost -uroot -p
password : z12345

SHOW databases;

CREATE DATABASE zopentutorials CHARACTER SET utf8
                               COLLATE utf8_general_ci;
							   
USE zopentutorials;

CREATE TABLE `zt_topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SHOW tables;

INSERT INTO `zt_topic` (`title`, `description`, `author`, `created`) VALUES('About JavaScript', 'JavaScript  is......', 'egoing', '2015-03-31 12:14:00');

SELECT * FROM zt_topic;

INSERT INTO `zt_topic` (`id`, `title`, `description`, `author`, `created`) VALUES(1, 'About JavaScript', '<h3>Desctiption</h3>\r\n<p>JavaScript  is a dynamic computer programming language. It is most commonly used as part of web browsers, whose implementations allow client-side scripts to interact with the user, control the browser, communicate asynchronously, and alter the document content that is displayed.</p>\r\n<p>\r\nDespite some naming, syntactic, and standard library similarities, JavaScript and Java are otherwise unrelated and have very different semantics. The syntax of JavaScript is actually derived from C, while the semantics and design are influenced by the Self and Scheme programming languages.\r\n</p>\r\n<h3>See Also</h3>\r\n<ul>\r\n  <li><a href="http://en.wikipedia.org/wiki/Dynamic_HTML">Dynamic HTML and Ajax (programming)</a></li>\r\n  <li><a href="http://en.wikipedia.org/wiki/Web_interoperability">Web interoperability</a></li>\r\n  <li><a href="http://en.wikipedia.org/wiki/Web_accessibility">Web accessibility</a></li>\r\n</ul>\r\n', 'egoing', '2015-03-31 12:14:00');
INSERT INTO `zt_topic` (`id`, `title`, `description`, `author`, `created`) VALUES(2, 'Variable and Constant', '<h3>Desciption</h3>\r\n\r\nIn computer programming, a variable or scalar is a storage location paired with an associated symbolic name (an identifier), which contains some known or unknown quantity or information referred to as a value. The variable name is the usual way to reference the stored value; this separation of name and content allows the name to be used independently of the exact information it represents. The identifier in computer source code can be bound to a value during run time, and the value of the variable may thus change during the course of program execution.\r\n\r\n<h3>See Also</h3>\r\n<ul>\r\n<li>Non-local variable</li>\r\n<li>Variable interpolation</li>\r\n</ul>\r\n', 'k8805', '2015-05-14 10:04:00');
INSERT INTO `zt_topic` (`id`, `title`, `description`, `author`, `created`) VALUES(3, 'Opeartor', '<h2>Operator</h2>\r\n<h3>Description</h3>\r\n<p>Programming languages typically support a set of operators: constructs which behave generally like functions, but which differ syntactically or semantically from usual functions</p>\r\n<p>Common simple examples include arithmetic (addition with +, comparison with >) and logical operations (such as AND or &&). </p>\r\n', 'egoing', '2015-06-18 05:00:00');
INSERT INTO `zt_topic` (`id`, `title`, `description`, `author`, `created`) VALUES(4, 'Conditional', '<h3>Description</h3>\r\n<p>In computer science, conditional statements, conditional expressions and conditional constructs are features of a programming language which perform different computations or actions depending on whether a programmer-specified boolean condition evaluates to true or false. Apart from the case of branch predication, this is always achieved by selectively altering the control flow based on some condition.</p>\r\n<p>In imperative programming languages, the term "conditional statement" is usually used, whereas in functional programming, the terms "conditional expression" or "conditional construct" are preferred, because these terms all have distinct meanings.</p>\r\n<h3>See Also</h3>\r\n<ul>\r\n<li><a href="http://en.wikipedia.org/wiki/Branch_(computer_science)" title="Branch (computer science)">Branch (computer science)</a></li>\r\n<li><a href="http://en.wikipedia.org/wiki/Conditional_compilation" title="Conditional compilation">Conditional compilation</a></li>\r\n<li><a href="http://en.wikipedia.org/wiki/Dynamic_dispatch" title="Dynamic dispatch">Dynamic dispatch</a> for another way to make execution choices</li>\r\n<li><a href="http://en.wikipedia.org/wiki/McCarthy_Formalism" title="McCarthy Formalism">McCarthy Formalism</a> for history and historical references</li>\r\n<li><a href="http://en.wikipedia.org/wiki/Named_condition" title="Named condition" class="mw-redirect">Named condition</a></li>\r\n<li><a href="http://en.wikipedia.org/wiki/Test_(Unix)" title="Test (Unix)">Test (Unix)</a></li>\r\n<li><a href="http://en.wikipedia.org/wiki/Yoda_conditions" title="Yoda conditions">Yoda conditions</a></li>\r\n</ul>', 'c2', '2015-07-25 00:00:00');
INSERT INTO `zt_topic` (`title`, `description`, `author`, `created`) VALUES('ZTest', '<h3>Description</h3>\r\n<p>In computer science, conditional statements, conditional expressions and conditional constructs are features of a programming language which perform different computations or actions depending on whether a programmer-specified boolean condition evaluates to true or false. Apart from the case of branch predication, this is always achieved by selectively altering the control flow based on some condition.</p>\r\n<p>In imperative programming languages, the term "conditional statement" is usually used, whereas in functional programming, the terms "conditional expression" or "conditional construct" are preferred, because these terms all have distinct meanings.</p>\r\n<h3>See Also</h3>\r\n<ul>\r\n<li><a href="http://en.wikipedia.org/wiki/Branch_(computer_science)" title="Branch (computer science)">Branch (computer science)</a></li>\r\n<li><a href="http://en.wikipedia.org/wiki/Conditional_compilation" title="Conditional compilation">Conditional compilation</a></li>\r\n<li><a href="http://en.wikipedia.org/wiki/Dynamic_dispatch" title="Dynamic dispatch">Dynamic dispatch</a> for another way to make execution choices</li>\r\n<li><a href="http://en.wikipedia.org/wiki/McCarthy_Formalism" title="McCarthy Formalism">McCarthy Formalism</a> for history and historical references</li>\r\n<li><a href="http://en.wikipedia.org/wiki/Named_condition" title="Named condition" class="mw-redirect">Named condition</a></li>\r\n<li><a href="http://en.wikipedia.org/wiki/Test_(Unix)" title="Test (Unix)">Test (Unix)</a></li>\r\n<li><a href="http://en.wikipedia.org/wiki/Yoda_conditions" title="Yoda conditions">Yoda conditions</a></li>\r\n</ul>', 'c2', '2015-07-25 00:00:00');

SELECT id, title, author, created FROM zt_topic ORDER BY author DESC;
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9398
아톰 에디터에서 소문자로 자동완성해주는거 실행하니까 오류가 나는데 대문자로 바꾸니까 잘됩니다^^;; 감사합니다^____^
Undefined variable: _post in 

MySqli Php 내장 API 사용하기.
C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\04_mysql 폴더 생성하기.
C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\04_mysql\index.php 파일 생성하기.

C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\logs\error.log 파일 열기.

DB 서버 접속 :
	MySql Monitor : mysql -hlocalhost -uroot -pz12345
	MySqli : $zconn=mysqli_connect('localhost', 'root', 'z12345');
	
DB 선택 :
	MySql Monitor : use DB_Name;
	MySqli : mysqli_select_db($zconn, 'zopentutorials');
	
DB 조회 :
	MySql Monitor : SELECT * FROM zt_topic;
	MySqli : $zresult = mysqli_query($zconn, 'SELECT * FROM zt_topic');
	
DB 출력 :
	MySql Monitor : 쿼리 결과.
	MySqli : $zrow = mysqli_fetch_assoc($zresult);
	         $zrow['title'];
			 $zrow['author`];	
	
<?php
  $zconn = mysqli_connect('localhost', 'root', 'z12345');
  mysqli_select_db($zconn, 'zopentutorials');
  $zresult = mysqli_query($zconn, 'SELECT * FROM zt_topic');

  while ($zrow = mysqli_fetch_assoc($zresult)) {
    //var_dump($zrow); //...받은 값 출력하기.
    echo $zrow['id'];
    echo $zrow['title'];
    echo "<br/>";
  }
 ?>		

C:\ZEnv\Bitnami\wampstack-5.6.30-2\mysql\bin>mysql -hlocalhost -uroot -p
password : z12345

SHOW databases;

CREATE DATABASE zopentutorials CHARACTER SET utf8
                               COLLATE utf8_general_ci;
							   
USE zopentutorials;

CREATE TABLE `zt_topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SHOW tables;

INSERT INTO `zt_topic` (`title`, `description`, `author`, `created`) VALUES('About JavaScript', 'JavaScript  is......', 'egoing', '2015-03-31 12:14:00');

INSERT INTO `zt_topic` (`id`, `title`, `description`, `author`, `created`) VALUES(1, 'About JavaScript', '<h3>Desctiption</h3>\r\n<p>JavaScript  is a dynamic computer programming language. It is most commonly used as part of web browsers, whose implementations allow client-side scripts to interact with the user, control the browser, communicate asynchronously, and alter the document content that is displayed.</p>\r\n<p>\r\nDespite some naming, syntactic, and standard library similarities, JavaScript and Java are otherwise unrelated and have very different semantics. The syntax of JavaScript is actually derived from C, while the semantics and design are influenced by the Self and Scheme programming languages.\r\n</p>\r\n<h3>See Also</h3>\r\n<ul>\r\n  <li><a href="http://en.wikipedia.org/wiki/Dynamic_HTML">Dynamic HTML and Ajax (programming)</a></li>\r\n  <li><a href="http://en.wikipedia.org/wiki/Web_interoperability">Web interoperability</a></li>\r\n  <li><a href="http://en.wikipedia.org/wiki/Web_accessibility">Web accessibility</a></li>\r\n</ul>\r\n', 'egoing', '2015-03-31 12:14:00');
INSERT INTO `zt_topic` (`id`, `title`, `description`, `author`, `created`) VALUES(2, 'Variable and Constant', '<h3>Desciption</h3>\r\n\r\nIn computer programming, a variable or scalar is a storage location paired with an associated symbolic name (an identifier), which contains some known or unknown quantity or information referred to as a value. The variable name is the usual way to reference the stored value; this separation of name and content allows the name to be used independently of the exact information it represents. The identifier in computer source code can be bound to a value during run time, and the value of the variable may thus change during the course of program execution.\r\n\r\n<h3>See Also</h3>\r\n<ul>\r\n<li>Non-local variable</li>\r\n<li>Variable interpolation</li>\r\n</ul>\r\n', 'k8805', '2015-05-14 10:04:00');
INSERT INTO `zt_topic` (`id`, `title`, `description`, `author`, `created`) VALUES(3, 'Opeartor', '<h2>Operator</h2>\r\n<h3>Description</h3>\r\n<p>Programming languages typically support a set of operators: constructs which behave generally like functions, but which differ syntactically or semantically from usual functions</p>\r\n<p>Common simple examples include arithmetic (addition with +, comparison with >) and logical operations (such as AND or &&). </p>\r\n', 'egoing', '2015-06-18 05:00:00');
INSERT INTO `zt_topic` (`id`, `title`, `description`, `author`, `created`) VALUES(4, 'Conditional', '<h3>Description</h3>\r\n<p>In computer science, conditional statements, conditional expressions and conditional constructs are features of a programming language which perform different computations or actions depending on whether a programmer-specified boolean condition evaluates to true or false. Apart from the case of branch predication, this is always achieved by selectively altering the control flow based on some condition.</p>\r\n<p>In imperative programming languages, the term "conditional statement" is usually used, whereas in functional programming, the terms "conditional expression" or "conditional construct" are preferred, because these terms all have distinct meanings.</p>\r\n<h3>See Also</h3>\r\n<ul>\r\n<li><a href="http://en.wikipedia.org/wiki/Branch_(computer_science)" title="Branch (computer science)">Branch (computer science)</a></li>\r\n<li><a href="http://en.wikipedia.org/wiki/Conditional_compilation" title="Conditional compilation">Conditional compilation</a></li>\r\n<li><a href="http://en.wikipedia.org/wiki/Dynamic_dispatch" title="Dynamic dispatch">Dynamic dispatch</a> for another way to make execution choices</li>\r\n<li><a href="http://en.wikipedia.org/wiki/McCarthy_Formalism" title="McCarthy Formalism">McCarthy Formalism</a> for history and historical references</li>\r\n<li><a href="http://en.wikipedia.org/wiki/Named_condition" title="Named condition" class="mw-redirect">Named condition</a></li>\r\n<li><a href="http://en.wikipedia.org/wiki/Test_(Unix)" title="Test (Unix)">Test (Unix)</a></li>\r\n<li><a href="http://en.wikipedia.org/wiki/Yoda_conditions" title="Yoda conditions">Yoda conditions</a></li>\r\n</ul>', 'c2', '2015-07-25 00:00:00');
INSERT INTO `zt_topic` (`title`, `description`, `author`, `created`) VALUES('ZTest', '<h3>Description</h3>\r\n<p>In computer science, conditional statements, conditional expressions and conditional constructs are features of a programming language which perform different computations or actions depending on whether a programmer-specified boolean condition evaluates to true or false. Apart from the case of branch predication, this is always achieved by selectively altering the control flow based on some condition.</p>\r\n<p>In imperative programming languages, the term "conditional statement" is usually used, whereas in functional programming, the terms "conditional expression" or "conditional construct" are preferred, because these terms all have distinct meanings.</p>\r\n<h3>See Also</h3>\r\n<ul>\r\n<li><a href="http://en.wikipedia.org/wiki/Branch_(computer_science)" title="Branch (computer science)">Branch (computer science)</a></li>\r\n<li><a href="http://en.wikipedia.org/wiki/Conditional_compilation" title="Conditional compilation">Conditional compilation</a></li>\r\n<li><a href="http://en.wikipedia.org/wiki/Dynamic_dispatch" title="Dynamic dispatch">Dynamic dispatch</a> for another way to make execution choices</li>\r\n<li><a href="http://en.wikipedia.org/wiki/McCarthy_Formalism" title="McCarthy Formalism">McCarthy Formalism</a> for history and historical references</li>\r\n<li><a href="http://en.wikipedia.org/wiki/Named_condition" title="Named condition" class="mw-redirect">Named condition</a></li>\r\n<li><a href="http://en.wikipedia.org/wiki/Test_(Unix)" title="Test (Unix)">Test (Unix)</a></li>\r\n<li><a href="http://en.wikipedia.org/wiki/Yoda_conditions" title="Yoda conditions">Yoda conditions</a></li>\r\n</ul>', 'c2', '2015-07-25 00:00:00');

SELECT id, title, author, created FROM zt_topic ORDER BY author DESC;

C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\04_mysql\process.php 파일 생성하기.
	<?php
	  //echo $_POST['title'];
	  $zconn = mysqli_connect('localhost', 'root', 'z12345');
	  mysqli_select_db($zconn, 'zopentutorials');
	  $zsql="INSERT INTO `zt_topic`(title, description, author, created) VALUES('".
			$_POST['title'] ."', '". $_POST['description'] ."', '". $_POST['author'] ."', now())";
	  echo $zsql;
	  $zresult = mysqli_query($zconn, $zsql);
	  header('Location:http://localhost/04_mysql/index.php');
	 ?>
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9427
Left, Right, Outer, Self... Join 은 어렵네요^^;; 감사합니다^____^
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9428
user-id 필드는 auto_increment 되므로 mysqli_insert_id($zconn) 로 직전에 추가된 행의 id 값을 구할 수 있는거였네요.
https://www.w3schools.com/php/func_mysqli_insert_id.asp
UPLOADCARE 홈피에서 텍스트에어리어 안에 붙이는 방법은 어떻게 찾으셨는지... 자료를 잘 찾고 싶습니다^^;; 감사합니다^____^

opentutorials.sql 파일 더블클릭해서 전체복사후 MySql Monitor 에 붙여넣어서 실행할것.
	SET FOREIGN_KEY_CHECKS=0;
	 
	-- ----------------------------
	-- Table structure for `topic`
	-- ----------------------------
	DROP TABLE IF EXISTS `topic`;
	CREATE TABLE `topic` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `title` varchar(100) NOT NULL,
	  `description` text NOT NULL,
	  `author` int(11) NOT NULL,
	  `created` datetime NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
	 
	-- ----------------------------
	-- Records of topic
	-- ----------------------------
	INSERT INTO `topic` VALUES ('1', 'About JavaScript', '<h3>Desctiption</h3>\r\n<p>JavaScript  is a dynamic computer programming language. It is most commonly used as part of web browsers, whose implementations allow client-side scripts to interact with the user, control the browser, communicate asynchronously, and alter the document content that is displayed.</p>\r\n<p>\r\nDespite some naming, syntactic, and standard library similarities, JavaScript and Java are otherwise unrelated and have very different semantics. The syntax of JavaScript is actually derived from C, while the semantics and design are influenced by the Self and Scheme programming languages.\r\n</p>\r\n<h3>See Also</h3>\r\n<ul>\r\n  <li><a href=\"http://en.wikipedia.org/wiki/Dynamic_HTML\">Dynamic HTML and Ajax (programming)</a></li>\r\n  <li><a href=\"http://en.wikipedia.org/wiki/Web_interoperability\">Web interoperability</a></li>\r\n  <li><a href=\"http://en.wikipedia.org/wiki/Web_accessibility\">Web accessibility</a></li>\r\n</ul>\r\n', '1', '2015-03-31 12:14:00');
	INSERT INTO `topic` VALUES ('2', 'Variable and Constant', '<h3>Desciption</h3>\r\n\r\nIn computer programming, a variable or scalar is a storage location paired with an associated symbolic name (an identifier), which contains some known or unknown quantity or information referred to as a value. The variable name is the usual way to reference the stored value; this separation of name and content allows the name to be used independently of the exact information it represents. The identifier in computer source code can be bound to a value during run time, and the value of the variable may thus change during the course of program execution.\r\n\r\n<h3>See Also</h3>\r\n<ul>\r\n<li>Non-local variable</li>\r\n<li>Variable interpolation</li>\r\n</ul>\r\n', '3', '2015-05-14 10:04:00');
	INSERT INTO `topic` VALUES ('3', 'Opeartor', '<h2>Operator</h2>\r\n<h3>Description</h3>\r\n<p>Programming languages typically support a set of operators: constructs which behave generally like functions, but which differ syntactically or semantically from usual functions</p>\r\n<p>Common simple examples include arithmetic (addition with +, comparison with >) and logical operations (such as AND or &&). </p>\r\n', '1', '2015-06-18 05:00:00');
	INSERT INTO `topic` VALUES ('4', 'Conditional', '<h3>Description</h3>\r\n<p>In computer science, conditional statements, conditional expressions and conditional constructs are features of a programming language which perform different computations or actions depending on whether a programmer-specified boolean condition evaluates to true or false. Apart from the case of branch predication, this is always achieved by selectively altering the control flow based on some condition.</p>\r\n<p>In imperative programming languages, the term \"conditional statement\" is usually used, whereas in functional programming, the terms \"conditional expression\" or \"conditional construct\" are preferred, because these terms all have distinct meanings.</p>\r\n<h3>See Also</h3>\r\n<ul>\r\n<li><a href=\"http://en.wikipedia.org/wiki/Branch_(computer_science)\" title=\"Branch (computer science)\">Branch (computer science)</a></li>\r\n<li><a href=\"http://en.wikipedia.org/wiki/Conditional_compilation\" title=\"Conditional compilation\">Conditional compilation</a></li>\r\n<li><a href=\"http://en.wikipedia.org/wiki/Dynamic_dispatch\" title=\"Dynamic dispatch\">Dynamic dispatch</a> for another way to make execution choices</li>\r\n<li><a href=\"http://en.wikipedia.org/wiki/McCarthy_Formalism\" title=\"McCarthy Formalism\">McCarthy Formalism</a> for history and historical references</li>\r\n<li><a href=\"http://en.wikipedia.org/wiki/Named_condition\" title=\"Named condition\" class=\"mw-redirect\">Named condition</a></li>\r\n<li><a href=\"http://en.wikipedia.org/wiki/Test_(Unix)\" title=\"Test (Unix)\">Test (Unix)</a></li>\r\n<li><a href=\"http://en.wikipedia.org/wiki/Yoda_conditions\" title=\"Yoda conditions\">Yoda conditions</a></li>\r\n</ul>', '2', '2015-07-25 00:00:00');
	INSERT INTO `topic` VALUES ('5', 'Function', 'A function model or functional model in systems engineering and software engineering is a structured representation of the functions (activities, actions, processes, operations) within the modeled system or subject area.', '2', '0000-00-00 00:00:00');
	INSERT INTO `topic` VALUES ('6', 'Object', 'In computer science, an object is a location in memory having a value and possibly referenced by an identifier. An object can be a variable, a data structure, or a function. In the class-based object-oriented programming paradigm, \"object\" refers to a particular instance of a class where the object can be a combination of variables, functions, and data structures. In relational database management, an object can be a table or column, or an association between data and a database entity (such as relating a person\'s age to a specific person)', '3', '0000-00-00 00:00:00');
	 
	-- ----------------------------
	-- Table structure for `user`
	-- ----------------------------
	DROP TABLE IF EXISTS `user`;
	CREATE TABLE `user` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `name` varchar(20) NOT NULL,
	  `password` varchar(30) NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
	 
	-- ----------------------------
	-- Records of user
	-- ----------------------------
	INSERT INTO `user` VALUES ('1', 'egoing', '111111');
	INSERT INTO `user` VALUES ('2', 'jin', '222222');
	INSERT INTO `user` VALUES ('3', 'k8805', '333333');
	INSERT INTO `user` VALUES ('4', 'sorialgi', '444444');
	INSERT INTO `user` VALUES ('5', 'lily', '555555');
	INSERT INTO `user` VALUES ('6', 'happydeveloper', '666666');

process.php	
	글쓰기(write.php)를 처리하는 process.php 파일에서 user 테이블에 author 가 있는지 조회해서
	없으면 추가하고, topic 테이블에 추가함.
	
	$zresult = mysqli_query($zconn, $zsql); 의 결과를 var_dump($zresult); 로 출력하면 아래와 같고
		object(mysqli_result)#2 (5) { ["current_field"]=> int(0) ["field_count"]=> int(3) ["lengths"]=> NULL ["num_rows"]=> int(1) ["type"]=> int(0) } 
		
	이 중 데이터가 없으면 $zresult->num_rows 값이 0이 되는 점을 이용해서 user 테이블에 author 를
	추가한 후, topic 테이블에 값을 추가함.
	이때, user-id 필드는 auto_increment 되므로 mysqli_insert_id($zconn) 는 직전에 추가된 행의 id 값 구해서 INSERT 함.
		https://www.w3schools.com/php/func_mysqli_insert_id.asp
		
index.php
	목록조회하고 한행씩 출력하기 :
		$zresult = mysqli_query($zconn, 'SELECT * FROM topic');
		$zrow = mysqli_fetch_assoc($zresult);
		//...zrow 내용을 볼 수 있음.
		var_dump($zrow);
			array(3) { ["id"]=> string(1) "1" ["name"]=> string(6) "egoing" ["password"]=> string(6) "111111" }

write.php			
	UPLOADCARE :
		https://uploadcare.com/
		회원가입 :
			Github 계정으로 OAuth 가입함.
			
		Dashboard :: Widget :: Integration 의 소스를 복사해서 삽입할 페이지의 body 종료 태그 앞에 붙여넣음.
		UPLOADCARE 를 위젯으로 만들고 업로드한 이미지 파일을 내용 부분에서 볼 수 있게 함.
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
		Input 태그 소스를 복사해서 붙여넣음.
			<input type="hidden" role="uploadcare-uploader"
				   data-images-only="true" />
		Dashboard :: Files 사용자들이 업로드한 파일 관리.
		삽입할 페이지의 textarea 태그에 id = 'description` 속성값을 줌.
			<textarea name="description" id="description"></textarea>
			
GitHub 실습 소스 :	
https://github.com/codingeverybody/makewebapp/commit/5379531d07ba586ed70c694471a2b1001581a5dd
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9471
HTML Entity 라는 단어랑 'OR 1=1의 위험성과 역슬래시 Escaping 을 이제야 좀 알겠네요. 감사합니다^_____^

C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\05_security 폴더 생성하기.
C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\05_security\z05.php 파일 생성하기.

Character Entity Reference Chart
	https://dev.w3.org/html5/html-author/charref
	http://www.ascii.cl/htmlcodes.htm
	
C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\05_security\index.php
	PHP 함수 htmlspecialchars();
		스크립트를 HTML Entity 로 변환해서 브라우저에 보이게 함.
		사용자가 입력한 내용으로 외부에서 조작할 수 있는 부분에 적용함.		

	PHP 함수 strip_tags(적용할부분, 허용할태그) : Escaping, 태그를 제거함.
	http://php.net/manual/en/function.strip-tags.php
	

C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\05_security\ztestLogin.php 파일 생성하기.
	C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\01_phpjs\z08_02.php 복사하기.
	http://localhost/05_security/ztestLogin.php?name=egoing&password=1111
	
DB 가 뚫리는 모습.	
	mysql> SELECT * FROM user WHERE 1=1; 를 이용하여
	mysql> SELECT * FROM user WHERE name="egoing" AND password="222" OR 1=1; 를 실행하면
	mysql> SELECT * FROM user WHERE FALSE OR TRUE; 로 데이터를 조회할 수 있고
	이를 이용하여 DB 를 뚫을 수 있음.
	주소창에 http://localhost/05_security/ztestLogin.php?name=egoing&password=XXXX' or '1'='1
	라고 입력하면 로그인이 됨.
	또한, 역슬래시(\)를 이용해서 작은쉼표등을 그대로 입력할 수 있음.
	mysql> INSERT INTO user(name, password) VALUES('tuli', '12\'34');
	  //...작은따옴표를 입력해도 역슬래시(\)에 의해 ESCAPING 되어 문자로 보이게만 함.
	echo mysqli_real_escape_string($zconn, "11'11");
		
	PHP 함수 echo mysqli_real_escape_string()로 작은따옴표를 입력해도 역슬래시(\)에 의해 
	ESCAPING 처리되어 문자로만 보이게 함.
	$_zname = mysqli_real_escape_string($zconn, $_GET['name']);
	$_zpassword = mysqli_real_escape_string($zconn, $_GET['password']);
	$zsql = "SELECT * FROM user WHERE name = '".$_zname
			  ."' AND password = '".$_zpassword."'";	
	브라우저에 SQL 문을 출력해보면 역슬래시가 작은따옴표 앞에 붙어서 기능을 못하게 하고
	단지 문자로만 보이게 함.
	SELECT * FROM user WHERE name = 'egoing' AND password = 'XXXX\' or \'1\'=\'1'

GitHub 실습 소스 :	
https://github.com/codingeverybody/makewebapp/commit/a715112dfc2f0c49c671979a9a80654528a5c9c7
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9480
저는 폴더를 다르게 만들어서 require() 함수를 호출하는 파일의 입장에서 찾아들어가야 되네요. 감사합니다^_____^

C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\06_lib 폴더 생성하기.
C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\06_lib\db.php 파일 생성하기.
	<?php
	  //...함수로 변환.
	  function zdb_init($zhost, $zuser, $zpw, $zdbname) {
		//$zconn = mysqli_connect('localhost', 'root', 'z12345');
		$zconn = mysqli_connect($zhost, $zuser, $zpw);
		mysqli_select_db($zconn, $zdbname);
		return $zconn;
	  }
	 ?>
	 
	호출하는 페이지에서는...
		require('../06_lib/db.php');
		$zconn = zdb_init('localhost', 'root', 'z12345', 'zopentutorials');	
		
C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\06_config 폴더 생성하기.
C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\06_config\config.php 파일 생성하기.
	<?php
	  $zconfig = array("zhost" => "localhost"
					   , "zhost" => "root"
					   , "zhost" => "z12345"
					   , "zhost" => "zopentutorials" );
	 ?>

	호출하는 페이지에서는...	 
		require('../06_lib/db.php');
		require('../06_config/config.php');
		$zconn = zdb_init($zconfig["zhost"], $zconfig["zuser"], $zconfig["zpw"], $zconfig["zdbname"]);
		
GitHub 실습 소스 :	
https://github.com/codingeverybody/makewebapp/commit/35b8b98ab067c939df873c1e64ebc12eebadfb96
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9481
Document 마실 다니는 법을 배우고 싶습니다. 감사합니다^_____^

부트스트랩 다운로드하기.
	http://getbootstrap.com/
	bootstrap-3.3.4-dist.zip 압축을 풀어서 C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs 에 폴더를 옮길것.
	C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\bootstrap-3.3.4-dist

트위터 부트스트랩 적용하기.		
	C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\06_tbootstrap 폴더 생성하기.
	C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\06_tbootstrap\index.php 파일 생성하기.
	아래 url 참조해서 index.php 파일에 적용하기.
		http://getbootstrap.com/getting-started/ :: Basic template
		<head>
			 <!--...S.Bootstrap 필수코드.ref http://getbootstrap.com/getting-started/ -->
			 <meta charset="utf-8">
			 <meta http-equiv="X-UA-Compatible" content="IE=edge">
			 <meta name="viewport" content="width=device-width, initial-scale=1">
			 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
			 <!-- Bootstrap -->
			 <link href="http://localhost/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
			 <!--...E.Bootstrap 필수코드.ref http://getbootstrap.com/getting-started/ -->		
			 ......

			<!--...S.Bootstrap 필수코드.ref http://getbootstrap.com/getting-started/ -->
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="http://localhost/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
			<!--...E.Bootstrap 필수코드.ref http://getbootstrap.com/getting-started/ -->
		</body>
		</html>

			 
트위터 부트스트랩 Grid system 적용하기.	
	http://getbootstrap.com/css/
	C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\06_tbootstrap\zgrid.php 파일 생성하기.	
		
GitHub 실습 소스 :	
https://github.com/codingeverybody/makewebapp/commit/f65d08715806fa93321bccd08afec788d9d517ad
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9483
이번 강좌를 실습하는데 이틀이 걸리면서 과연 이번 강좌를 구상하고 만드시는데는 
며칠이 걸렸을까 생각하면서 정말 대단하신거 같습니다. 감사합니다^_____^

ip 와 도메인 :
	상대방의 ip 확인 :
		C:\Users\JOYWINS>ping opentutorials.org

		Ping opentutorials.org [52.78.110.202] 32바이트 데이터 사용:
		요청 시간이 만료되었습니다.
		요청 시간이 만료되었습니다.
		요청 시간이 만료되었습니다.
		요청 시간이 만료되었습니다.

		52.78.110.202에 대한 Ping 통계:
			패킷: 보냄 = 4, 받음 = 0, 손실 = 4 (100% 손실),

		C:\Users\JOYWINS>
	
	자신의  ip 확인 :
		https://whatismyipaddress.com/.

	DNS : Domain Name System.
		Domain Name Server.
		https://opentutorials.org/course/228/1450
		
		
		
IPv6 :
		사설 IP 와 공인 IP.
				IP 의 범위 :
					0.0.0.0 ~ 255.255.255.255 
					42억개.
					IPv6 의 등장 : 2^128승개의 IP 갯수.
					
				사설 IP :
					공유기.
					
		크롬 원격 데스크탑 사용 방법 : 
			https://youtu.be/uGFw8jqaJ0o
			
포트 포워딩 :
	mysql -uroot -p -hnnn.nnn.n.nnn -P3306
		마지막 -P3306 은 포트를 의미함.
	대부분의 공유기는 192.168.0.1 을 사용함.

		C:\Users\JOYWINS>ipconfig

		Windows IP 구성


		이더넷 어댑터 로컬 영역 연결:

		   연결별 DNS 접미사. . . . :
		   링크-로컬 IPv6 주소 . . . . : fe80::d17a:7e0d:3559:c5b1%13
		   IPv4 주소 . . . . . . . . . : 192.168.0.9
		   서브넷 마스크 . . . . . . . : 255.255.255.0
		   기본 게이트웨이 . . . . . . : 192.168.0.1

		C:\Users\JOYWINS>
	


	IpTime 기준 Port Forwarding.
		참조 : 
			무선_iptime_ZBe.jpg ~ 무선_iptime_ZBe_02.jpg
			유선_iptime_ZBe.jpg ~ 유선_iptime_ZBe_01.jpg
	
절대경로와 상대경로 :
		C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\07_portforward\z70.html 파일 생성하기.
		C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\07_portforward\z71.html 파일 생성하기.
		
		C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\07_portforward\index.php 파일 경로 수정하기.
		http://nnn.nnn.n.nnn/07_portforward/index.php 호출 성공.
		
		http://nnn.nnn.n.nnn/ 호출하면 기본값으로 index.html 파일을 호출하므로, index.html 파일을 지우고
		index.php 를 남기면 index.php 를 호출함.
		
		
		
		
GitHub 실습 소스 :	
https://github.com/codingeverybody/makewebapp/commit/f65d08715806fa93321bccd08afec788d9d517ad
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/9485
IaaS, PaaS, SaaS 개념이 이런거구나 배우고 갑니다. 감사합니다^_____^

호스팅과 클라우드 :
	가상머신 :
		ex) VMWare, VirtualBox, Paralles.
		
		운영형태별 종류 :
			직접운영(모두 직접 구비 및 설치운영 : H/W, OS, Platform, S/W).
			
			IaaS(Infrastructure as a s Service : H/W, OS 는 사업자가 제공하는 서비스를 사용하고, 
			                                           Platform, S/W 만 구비 및 설치운영).
				ex) 아마존 AWS, MS Azure, KT Ucloud...서버호스팅
				
			PasS(Platform as a Service : 자신은 S/W 만 구비 및 설치운영), 웹호스팅.
			
			SaaS(Software as a Service : S/W 까지 모든 것을 사업자가 제공하는 서비스로 사용함).
/*----------------------------------------------------------------*/			

https://opentutorials.org/course/1688/9506
감명깊은 이고잉님 어록...
"본질을 응시하면서 현실에 잘 적응해나가자" 라는 애정어린 조언이 담긴 강좌를 만들어주셔서 감사합니다^_____^
"무엇을 모르는지 모르는 상태에서 무엇을 모르는지 조금이라도 아는 상태로 나가자."
감사합니다^_____^

성장전략 : Scalability.
	Scale Up :
		ex) 제너럴셔먼 나무(한그루가 초강력해짐).
	Scale Out :
		ex) 판도(뿌리가 하나).
		
	라운드로빙(Round-Robin) :
		사용자마다 다른 DNS 로 접속하게 하여 부하를 분산함.
		
	Load Balancer 사용.
	
	Cloud Computer 사용 :
		가상화 + 종량제로 부하를 대응함.
		개발자가 고민해야 함.
/*----------------------------------------------------------------*/


https://opentutorials.org/course/1688/10231
이고잉님의 목소리는 선천적인거여서 포기해야 하지만, 강의 중 느껴지는 재치있는 감각은 
어디서 나오는지 배우고 싶네요. 감사합니다^_____^
외우는 것은 뇌를 혹사시키는 거고, 이해하는 것은 뇌를 흥분시키는 것이다.
외워지는 것이다.
전 왜 아직도 패딩과 마진은 여전히 헷갈리네요, 마음이 급해서인가 봅니다.
다른것도 할게 많아서 Javascript 랑 CSS 를 이참에 제대로 파려고 시작했는데
여기까지 오는데 10일 걸렸습니다.


복습 :
	Php MySql Admin  실행 :
		http://localhost/phpmyadmin/db_structure.php?server=1&db=zopentutorials2
		데이터베이스 :: 새 데이터베이스 만들기.
		테이블 작업 :: 새 테이블 마들기.
		물결무늬 밑의 grave accent

	index.php 파일 생성하기.
		C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\08_practice1 폴더 생성하기.
		C:\ZEnv\Bitnami\wampstack-5.6.30-2\apache2\htdocs\08_practice1\index.php 파일 생성하기.
		
		Connection.
		DB 선택.
		DB CRUD 작업.
		
		아톰 편집기 Ctrl + G
		
리팩토링 :
		유지보수가 어려워지는 상황에서 필요함.
/*----------------------------------------------------------------*/
		
		
https://opentutorials.org/course/1688/10249
Javascript 와 CSS 를 제대로 알고 싶어서 시작했는데 강의를 다 보는데 10일 걸렸습니다.
강의를 듣고 실습을 하다보면 평균 하루에 4시간 이상은 공부를 한거 같습니다.
문서와 자료를 잘 마실하는 방법을 빨리 체득하면 좋겠다는 생각이 들면서, 이고잉님처럼 재치있고 경쾌한 표현을
잘하려면 평소에 어떤 성격이어야 할지 궁금해집니다.
또, 개발자는 생산성을 중시해야 한다는 말씀에 꼼꼼하게 정리하고 공부하면서 개발하는 제 방식도 장점은 있지만
어떻게 하면 여기다가 생산성을 높일 수 있을까 더 많은 생각을 하게 되어 강의를 듣고나니 큰 숙제가 생겼습니다.
강의 내용과 완전히 일치하지는 않지만, 이고잉님의 강좌를 들으면서 챕터별로 실습한 소스를 올립니다.
https://github.com/tudoistube/zjavascript/tree/zopentutorials
끝으로, 따뜻하고 훌륭한 강의를 만들어 주셔서 감사합니다^_____^

복습2 :		
		mysqli_real_escape_string : 웹서버로 파라미터를 전달할 때 살균.
		htmlspecialchars : 웹서버로부터 데이터를 받을 때 살균.
/*----------------------------------------------------------------*/

    
책 보면서 실습한 소스임.  
공부하면서 올리는 것이어서 틀린 부분이 있을수도 있음(알려주시면 반영하겠음)  
정확한 내용은 위의 저자의 링크를 참조하시기 바람.  

---
뭔가 공익적인 측면에서 도움이 될 수 있는 것을 함께 만드실 분을 찾음.

I hope to make something good to make our society better.  
If you are interested in my idea, please send your mail to me.  
e-mail : tudoistube@gmail.com
---
