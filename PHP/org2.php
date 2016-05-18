<HTML>
<HEAD>
<TITLE>VERSION TEST</TITLE>
</HEAD>

<BODY>

	<?php
		for( $i=1; $i<10; $i++ ) {
			for( $j=1; $j<10; $j++ ) {
				printf("[%2d]", $i * $j);
			}
			echo "<br/>";
		}
	?>

</BODY>
</HTML>
