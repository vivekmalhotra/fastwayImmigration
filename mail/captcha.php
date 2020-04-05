<?php
session_start();

// Defines an empty variable captcha
$captcha = '';
// Height & Width of the captcha
$captchaHeight = 60;
$captchaWidth = 140;
// Length of CAPTCHA and allowed characters
$totalCharacters = 6;
$possibleLetters = 'MNBVCXZASDFGHJKLPOIUYTREWQ';
// Font and Font Size of the CAPTCHA text
$captchaFont = 'monofont.ttf';
$captchaFontSize = $captchaHeight * 0.65;
// Noise (Background Dots and Lines) to obfuscate the CAPTCHA text
$randomDots = 50;
$randomLines = 25;
// Color of the CAPTCHA text and Noise color
$textColor = "6d87cf";
$noiseColor = "6d87cf";


/* Run the while loop to create a random CAPTCHA string text
while characters in the string are less than required */
$character = 0;
while ($character < $totalCharacters)
{
  $captcha .= substr($possibleLetters, mt_rand(0, strlen($possibleLetters)-1), 1);
  $character++;
}
// Create a CAPTCHA image
$captchaImage = @imagecreate($captchaWidth, $captchaHeight);
$backgroundColor = imagecolorallocate($captchaImage, 255, 255, 255);
$arrayTextColor = HEXtoRGB($textColor);
$textColor = imagecolorallocate( $captchaImage, $arrayTextColor['red'], $arrayTextColor['green'], $arrayTextColor['blue'] );
$arrayNoiseColor = HEXtoRGB($noiseColor);
$imageNoiseColor = imagecolorallocate( $captchaImage, $arrayNoiseColor['red'], $arrayNoiseColor['green'], $arrayNoiseColor['blue'] );

// Create random Dots in the CAPTCHA Image
for($captchaDotsCount=0; $captchaDotsCount<$randomDots; $captchaDotsCount++ )
{
  imagefilledellipse( $captchaImage, mt_rand(0,$captchaWidth), mt_rand(0,$captchaHeight), 2, 3, $imageNoiseColor );
}
// Create random Lines in the CAPTCHA Image
for( $captchaLinesCount=0; $captchaLinesCount<$randomLines; $captchaLinesCount++ )
{
  imageline( $captchaImage, mt_rand(0,$captchaWidth), mt_rand(0,$captchaHeight), mt_rand(0,$captchaWidth), mt_rand(0,$captchaHeight), $imageNoiseColor );
}
$text_box = imagettfbbox(\$captchaFontSize, 0, $captchaFont, $captcha);
$x = ($captchaWidth - $text_box[4])/2;
$y = ($captchaHeight - $text_box[5])/2;
imagettftext( $captchaImage, $captchaFontSize, 0, $x, $y, $textColor, $captchaFont, $captcha );
header('Content-Type: image/jpeg');
imagejpeg($captchaImage);
imagedestroy($captchaImage);

$_SESSION['captcha'] = $captcha;

function HEXtoRGB ($hexstring)
{
  $integar = hexdec($hexstring);
  return array( "red" => 0xFF & ($integar >> 0x10), "green" => 0xFF & ($integar >> 0x8), "blue" => 0xFF & $integar);
}

?>