<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
</head>

<body>
	<h2>
		함수의 입력과 출력
	</h2>
	
	<h4>Javascript</h4>
	<p>
		function function_name(변수이름) {<br>
		document.write(변수이름);<br>
		} <br>
		function_name(입력값); <br>
		입력값 = 변수이름 값
	</p>
	<script>
		function a(input){
			document.write(input+1);
		}
		a(1);
	</script>
	<p>
		반환: return뒤의 input+1이 반환되는것.
	</p>
	<script>
		function a(input){
			return input+1;
		}
		document.write(a(1));
	</script>
	<h4>php</h4>
	<p>
		같은 예제로 php버젼도 JS와 동일하다.
	</p>
	<?php
		function a($input) {
			return $input+1;
		}
	echo a(1);
	?>
</body>

</html>
