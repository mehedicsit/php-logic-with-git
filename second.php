<?php
// $number = 1234;

// while ($number) {
// 	echo  $number%10;//4 3 2 1

// 	$number = floor($number/10);//number = 123 12 1 0 


// }


// $number = 1234;

// while ($number) {
// 	$number = $number/10;//4 3 2 1
// 	$number = floor($number/10);//number = 123 12 1 0 
	

// }

// for ($i=count($a)-1; $i >=0 ; $i--) { 
// 	echo $a[$i].'<br>';
// }

// echo pow(10,3);


// $i=1;
// for (; $i <=10 ; ) { 
// 	echo $i.'<br>';
// 	$i++;
// }

// $i=1;
// while ( $i<= 10) {
// 	echo $i.'<br>';
// 	$i++;
// }

// $array = [1,2,3,4,5];

// $count = count($array)-1;
// $sum = 0;
// foreach ($array as $value) {
// 	$sum += $value*pow(10, $count);
// 	$count--;
// }
// echo $sum;

$num1 = 1234;
$num2 = 5678;

$sum = 0;
while($num1)
{
	$rest1 = $num1%10;
	$rest2 =  $num2%10;
	
	$rest = $rest1*$rest2;

	$sum += $rest;

	$num1 = floor($num1/10);
	$num2 = floor($num2/10);

}

echo $sum;



