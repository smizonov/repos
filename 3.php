<HTML>
	<BODY>
		<?php
		$login=$_POST['login'];
		$pass=$_POST['pass'];
		if (($login=="123")&&($pass="321")) {
			$info=$_POST['inf'];
			echo "Login -'".$login."'-<BR>";
			echo "Password -'".$pass."'-<BR>";
			echo "Information -".info."-";
		}
		else {echo "ERROR";}
		?>
	</BODY>
</HTML>