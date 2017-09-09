<?php

//any number divideable by 3,5,7

// $number = 35;

// $input=[3,5,7];
// 	foreach($input as $divider){
// 		if($number%$divider==0){
// 			echo $divider."<br>";
// 		}
		
// 	}
// $input = 100;
// $sum = 0;
// for($i = 2; $i<=$input ; $i=$i + 2){
// 	$sum = $sum + $i;
// }

// echo $sum;

$string = null;
$num = 2000000012;

if ($num >= 10000000) 
{
	
	$cror = floor($num / 10000000);
	$string .=$cror.' cror ';
}

if ($num >= 100000) 
{
	
	$lac = floor($num / 100000);
	$num = $num % 100000;
	$string .=$lac.' lakh ';
}

if ($num >= 1000) 
{
	
	$thousand = floor($num / 1000);
	$num = $num % 1000;
	$string .=$thousand.' thousand ';
}

if ($num >= 100) 
{
	
	$hundred = floor($num / 100);
	$num = $num % 100;
	$string .=$hundred.' hundred ';
}

if ($num) 
{
	$string .=$num;
}

echo $string.' taka';

