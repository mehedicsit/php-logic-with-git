<?php

$string = null;
$num = 2001000012;

if ($num >= 10000000) 
{
	
	$cror = floor($num / 10000000);
	$num = $num - $cror*10000000;
	$string .=$cror.' cror ';
}

if ($num >= 100000) 
{
	
	$lac = floor($num / 100000);
	$num = $num - $lac*100000;
	$string .=$lac.' lakh ';
}

if ($num >= 1000) 
{
	
	$thousand = floor($num / 1000);
	$num = $num - $thousand*1000;
	$string .=$thousand.' thousand ';
}

if ($num >= 100) 
{
	
	$hundred = floor($num / 100);
	$num = $num - $hundred*100;
	$string .=$hundred.' hundred ';
}

if ($num) 
{
	$string .=$num;
}

echo $string.' taka';

