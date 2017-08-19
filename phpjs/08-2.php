<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
</head>

<body>
  <h1>Log in function made with php</h1>
  <?php
    $password = $_GET["password"];
    if($password == "111"){
      echo "Welcome!";
    } else {
      echo "Do I know you?";
    }
  ?>
  <p>echo 사용자가 입력한 정보중에 password의 값 = 주소창에 ?password=111<br>
  요걸 php code로 쓰면: echo $_GET["password"];</p>
</body>

</html>
