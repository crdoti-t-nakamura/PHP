<HTML>
<HEAD>
<TITLE>PHPのテスト</TITLE>
</HEAD>

<BODY>

	<FORM name="form1" method="post" action="view.php">

		<?php

			print "名前：";
			print $_POST["onamae"];
			print "<br/><br/>";
			print "本文：<br/>";
			print nl2br($_POST["honbun"]);

		?>

		<br/>

		<INPUT type="submit" value="確　認" name ="confirm">
		<INPUT type="submit" value="戻　る" name ="back">
		<INPUT type="hidden" name ="user_id" value="<?=$_POST["user_id"]?>">
		<INPUT type="hidden" name ="onamae" value="<?=$_POST["onamae"]?>">
		<INPUT type="hidden" name ="honbun" value="<?=$_POST["honbun"]?>">

	</FORM>

</BODY>
</HTML>
