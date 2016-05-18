<HTML>
<HEAD>
<TITLE>PHPのテスト</TITLE>
</HEAD>

<BODY bgcolor="FFFFFF" text="#000000">

	<FONT size="4">テキスト送信のテスト</FONT>

	<FORM name="form1" method="post" action="confirm.php">
		名前：<br/>
		<INPUT type="text" name ="onamae">
		<br/>
		本文：<br/>
		<TEXTAREA name ="honbun" cols="30" rows="5"></TEXTAREA>
		<br/>
		<INPUT type="submit" value="送　信">
		<INPUT type="hidden" name ="user_id" value="0001">
	</FORM>





	<?php
		if( isset($_POST["confirm"]) ) {
		?>

			<?php
				print $_POST["onamae"]."さんからのメッセージ";
				print "<br/><br/>";
				print "本文：<br/>";
				print nl2br($_POST["honbun"]);
			?>

		<?php
		} else if ( isset($_POST["back"]) ) {
		?>

			<FONT size="4">テキスト送信のテスト</FONT>
			<FORM name="form1" method="post" action="confirm.php">
				名前：<br/>
				<INPUT type="text" name ="onamae" value="<?=$_POST["onamae"]?>">
				<br/>
				本文：<br/>
				<TEXTAREA name ="honbun" cols="30" rows="5"><?=$_POST["honbun"]?></TEXTAREA>
				<br/>
				<INPUT type="submit" value="送　信">
				<INPUT type="hidden" name ="user_id" value="<?=$_POST["user_id"]?>">
			</FORM>

		<?php
		} else {
		?>

		エラーです。<br/>
		<a href="form.html">form.html</a>からアクセスしてください。

		<?php
		}
		?>

</BODY>
</HTML>
