<?php 
/**
* http://letsknowit.com/php-programming-questions
* Write a program to print Factorial of any number
* 4! = 4 × 3 × 2 × 1 = 24
*/


$number = 101;

$array = array();

$factorial = 1;

for( $i=1; $i<=$number; $i++){
	$array[] = $i;

	$factorial = $factorial*$i;
}

//print_r(array_reverse($array));

echo "The Factorial for " . $number ."! is " . $factorial;

echo "<br>";
echo "<br>";


/**
* Write a program in PHP to print Fibonacci series . 0, 1, 1, 2, 3, 5, 8, 13, 21, 34
*/


$series = array('0','1');
$fib_array = array();
for( $f=0; $f <= 10; $f++){
	$a = end($series);
	$b = $series[count($series)-2];
	$series[]=$a+$b;
}

$fib_series = implode(',',$series);

echo "The Fibonacci series is " . $fib_series;

echo "<br>";
echo "<br>";


/**
* Write a program to find whether a number is Armstrong or not.
* An Armstrong number of three digits is an integer such that the sum of the cubes of its digits is equal to the number itself. 
* 371 
*/


$number = 111;

$str = (string)$number;

$length_str = strlen($str);

for($i=0; $i<$length_str; $i++){
	$number_cube[] = pow( $str[$i], $length_str );
}

$array_sum  = array_sum($number_cube);

if($array_sum == $number){
	echo "The given number is " . $number . " an Armstrong.";
} else {
	echo "The given number is not an Armstrong"; 
}

/**
* Write a program to print Reverse of any number.
*/
$number = 111;

$number_length = strlen( ( string )$number );

for( $j = 0; $j< $number_length; $j++){
	
}
