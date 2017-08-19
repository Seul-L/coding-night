<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
</head>

<body>
  <h1>배열 Array</h1>
	<p>변수처럼 정보를 담는 그릇이다. 변수에는 하나의 값만 넣을 수 있고, 배열은 서로 연관되어 있는 여러개의 값을 넣을 수 있다. 이 배열은 변수에 담아서 사용할수도있다.</p>
  <h2>JavaScript</h2>
	<p>
		list=new Array("one", "two", "three"); <br>
		one, two, three라는 배열을 list라는 변수에 담은것이다.
		<br>
		배열안의 것을 출력할떄는 이렇게 표시한다. 이것은 첫번째 정보인 one을 보여준다.<br>
		list[0];	<br>
		.length를 이용하면 list안에 몇개가 있는지 알려준다.<br>
		list.length <br>
	</p>
	<script>
		list=new Array("one", "two", "three");
		document.write(list[0]);
		document.write(list.length);
	</script>
	
	<h2>php</h2>
	<p>
		Javascript와 같이 문법만 조금 다르다.<br>
		$list=array("one", "two", "three");<br>
		배열안의 것을 출력할떄는 이렇게 표시한다. 이것은 세번째 정보인 three을 보여준다.<br>
		$list[2];<br>
		count를 이용하면 list안에 몇개가 있는지 알려준다.<br>
		count($list); <br>
	</p>
	<?php
	$list=array("one", "two", "three");
	echo	$list[2];
	echo count($list);
	?>
		
</body>

</html>
