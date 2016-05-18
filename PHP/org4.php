<HTML>
<HEAD>
<TITLE>VERSION TEST</TITLE>
</HEAD>

<BODY>

	<form action="./calc.php" method="post">
		<font size="3">数値を入力して下さい：</font>
		<input type="number" name="num" size=10 />
		<input type="submit" value="送信" />
	</form>

	<form action="./calc.php" method="get">
		<input type="number" name="num" size=10 />
	</form>
</BODY>
</HTML>
