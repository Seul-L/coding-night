<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
</head>

<body>
  <h1>
    JavaScript
  </h1>
    <script>
      document.write("10"+"10");
  </script>
    <h1>
    php
  </h1>
  <?php
    echo "10"."10";
  ?>
  <h4>
  JS & php 연산자
  </h4>
  <p>1+1<br>
  1-1<br>
  2*2<br>
  4/2<br></p>
  <p>
   JS는 문자와 문자를 더할때 숫자와 같이 + 를 쓰고 php는 . 을 쓴다. <br>
   문자는 ""안에 쓰고 숫자는 그냥 쓴다.<br>
   php는 ""안에 숫자가 있고 연산자로 연결되있으면 숫자로 간주하고 계산한다.<br>
   php eg) echo "10"."10"; 는 1010을 보여주고 echo 10+10; 이나 echo "10"+"10"; 은 20을 보여준다.<br>
   JS eg) document.write("10"+"10"); 는 1010을 보여주고 document.write(10+10); 은 20을 보여준다.<br>
   화면에 무언가 출력할때 php는 echo를 쓰고 JS는 document.write()를 쓴다.<br>
  </p>
  
</body>

</html>
