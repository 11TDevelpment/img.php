<?php 
if (isset($_GET['im'])) {
	$img_path = "images/image/";
	$img_get = $_GET['p'] . '/'. $_GET['f'];
	$img = $img_path . $img_get . '.jpg';

	if (!$img = imagecreatefromjpeg($img)) {
		echo "no image found!!"; exit;
	}

	header("Content-Type: image/jpeg");
	imagejpeg($img);
	imagedestroy($img);
}
?>