<?php
$im = imagecreatetruecolor( 16, 16 );
$white = imagecolorallocate( $im, 255, 255, 255 );

$r = array_key_exists('r', $_GET) ? $_GET['r'] : 0;
$g = array_key_exists('g', $_GET) ? $_GET['r'] : 0;
$b = array_key_exists('b', $_GET) ? $_GET['r'] : 0;

$black = imagecolorallocate( $im, $r,$g,$b );

header( "Content-type: image/png" );

for ($x=0; $x <=15; $x++) 
    for ($y=0; $y <=15; $y++) 
        imagesetpixel( $im, $x,$y, rand(0,1) ? $black:$white );
        

imagepng( $im );
?>