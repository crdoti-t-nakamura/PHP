<HTML>
<HEAD>
<TITLE>VERSION TEST</TITLE>
</HEAD>

<BODY>

	<form action="./org5.php" method="post">
		<font size="3">数値を入力して下さい：</font>
		<input type="number" name="num" size=10 />
		<input type="submit" value="送信" />
	</form>
# 2 3 5 7 11 13 17 
	<?php
		if(isset($_POST['num'])) {


			for($i = 2; $i < 100; $i++) {
				$n = 0;
				for($j = 2; $j <= $i; $j++) {
					if($i % $j != 0){
						$n++;
					} else {
						break;
					}
				}
				if($n == 0) {
					echo $i;
				}
			}


		}
	?>

</BODY>
</HTML>
