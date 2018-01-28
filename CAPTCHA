<?php
session_start();


$captcha ='';

for($x = 0; $x< 5; $x++){
	
	$captcha .=chr(rand(65,122));
	
}

$a=rand(0,255);
$b=rand(0,255);
$c=rand(0,255);
$d=rand(10,-10);
$e=rand(1,15);
$_SESSION[ 'captcha_code'] = $captcha;

$dir = 'fonts/';
$image = imagecreate(200,100);
imagecolorallocate($image,255,255,255);
$image=imagecreatefrompng($dir."my.png");
$black = imagecolorallocate($image, 0,0,0);
$color = imagecolorallocate($image, $a,$b,$c);
$white = imagecolorallocate($image, $a+15,$b+15,$c+15);
for($x=1;$x<30;$x++)
{
	$x1=rand(0,200);
	$y1=rand(0,100);
	$x2=rand(0,200);
	$y2=rand(0,100);
	imageline($image,$x1,$y1,$x2,$y2,$white);
}
	
//imagefilledrectangle($image, 0, 0, 200, 200, $white);
imagettftext($image, 30, $d, 10, 60, $color, $dir."$e.ttf", $_SESSION['captcha_code']);

header("Content-type: image/png");
imagepng($image);
?>
