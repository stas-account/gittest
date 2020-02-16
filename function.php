<?php



function wtf($array, $stop = false) {
	echo '<pre>'.print_r($array,1).'</pre>';
	if(!$stop) {
		exit();
	}
}




function resizeImage ($file, $w, $h, $path, $crop=FALSE) {
	list($width, $height) = getimagesize($file);
	$r = $width / $height;
	if ($crop) {
		if ($width > $height) {
			$width = ceil($width-($width*abs($r-$w/$h)));
		} else {
			$height = ceil($height-($height*abs($r-$w/$h)));
		}
		$newwidth = $w;
		$newheight = $h;
	} else {
		if ($w/$h > $r) {
			$newwidth = $h*$r;
			$newheight = $h;
		} else {
			$newheight = $w/$r;
			$newwidth = $w;
		}
	}
	switch($_FILES['file']['type']) {
		case 'image/jpeg':
			$src = imagecreatefromjpeg($file);
			break;
		case 'image/png':
			$src = imagecreatefrompng($file);
			break;
		case 'image/gif':
			$src = imagecreatefromgif($file);
			break;
		case 'image/bmp':
			$src = imagecreatefrombmp($file);
			break;
	}

	$dst = imagecreatetruecolor($newwidth, $newheight);
	imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
	imagejpeg($dst, $path, 100);
	imagedestroy($dst);
}

