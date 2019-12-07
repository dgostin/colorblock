<?php
 
header("Content-type: image/png");
 
extract ($_GET);

$img_width = $width;
$img_height = $height;
 
$img = imagecreatetruecolor($img_width, $img_height);

$color = imagecolorallocate($img, $r, $g, $b);
 
imagefill($img, 0, 0, $color);

imagepng($img);
 
?>