<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
</head>

<body>
	<h2>
		배열과 반복문: 바늘과 실 같은 관계
	</h2>
	<h4>Javascript</h4>
	<p>
		반복문은 4번 반복하고 i는 1씩 증가한다. 즉, 0부터 3까지 보여주게 된다.
	</p>
	<script>
		list = new Array("최진혁", "최유빈", "한이람", "한이은", "이고잉");
		i = 0;
		while(i < 4){
			document.write(list[i]);
			i = i + 1;
		}	
	</script>
	<p>
		이번 반복문은 list의 값만큼 반복하고 i는 1씩 증가한다. 즉, 0부터 list에 추가되거나 삭제되엇을때도 유연하게 list값만큼 보여주게 된다. 그리고 리스트로 보여준다.
	</p>
	<script>
		list = new Array("최진혁", "최유빈", "한이람", "한이은", "이고잉");
		i = 0;
		while(i < list.length){
			document.write("<li>"+list[i]+"</li>");
			i = i + 1;
		}
	</script>
	
	<h4>php</h4>
	<p>
		같은 예제로 php버젼은 요렇게 나온다.
	</p>
	<?php
	$list = array("최진혁", "최유빈", "한이람", "한이은", "이고잉");
	$i = 0;
	while($i < 4){
		echo $list[$i];
		$i = $i + 1;
	}
	?>
	<p>
		리스트로 만들면:
	</p>
	<?php
	$list = array("최진혁", "최유빈", "한이람", "한이은", "이고잉");
	$i = 0;
	while($i < count($list)){
		echo "<li>".$list[$i]."</li>";
		$i = $i + 1;
	}
	?>
</body>

</html>
