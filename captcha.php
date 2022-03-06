<?php 
	session_start();
		$code=rand(100000,999999);
		$_SESSION['code']=$code;

		$image=imagecreatefromjpeg("cap_bg.jpg");
		$noir=imagecolorallocate($image, 0,0,0);
		$blanc=imagecolorallocate($image, 255,255,255);

		
		imagestring($image, 5,5,5, $code, $blanc);
		header("content_type image/jpeg");

		imagejpeg($image,null,75);
	 ?>
