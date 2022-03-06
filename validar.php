<?php 
	session_start();
	if (isset($_POST['captcha'])&&$_POST['captcha']==$_SESSION['code']) {
		echo "<p>Codigo valido</p>";
	}else{
		echo "<p>Codigo invalido</p>";
	}
 ?>