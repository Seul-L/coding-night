<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
</head>

<body>
  <h2>반복문</h2>
  <p>while(true/ false) {  <-- true 나 false 둘 중 하나만 올 수 있다.<br>
     A를 계속 실행해라 괄호속에 넣은 값의 반대가 될때까지<br>
    } else {<br>
     A가 실행이 안되면 B를 실행해라.<br>
    }<br><hr>
    만약 어떤 값이 계속 끝없이 반복해서 실행되는것이 infinite loop이고 이건 컴터에게 좀 무리를 준다 ㅎㅎ
  </p>
    <h2>Javascript</h2>
  <ul>
    <script>
      i = 0;
      while(i < 10){
        document.write("<li>true </li>");
        i = i + 1;
      } 
    </script> 
  </ul>

    <h2>php</h2>
  <ol>
    <?php
       $i = 0;
        while($i < 10){
          echo "<li>true </li>";
          $i = $i + 1;
        }  
    ?>
    </ol>
</body>

</html>
