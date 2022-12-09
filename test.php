<?php

/* create print number form 1 to 100, multiple of 3 -> fizz and for 5-> buzz */

/* Run this function test_result(); to get result. You can remove comment to get the result.*/ 

// test_result();

function test_result(){
for ( $i =1; $i<=100; $i++){
	
	echo $i;
	echo divisible_three( $i );
	echo divisible_five( $i );
	echo "</br>";
}
}

function divisible_three( $i ){
	if( $i%3 == 0 ){
		return "fizz";
	}
	return false;
}

function divisible_five( $i ){
	if( $i%5 == 0 ){
		return "buzz";
	}
	return false;
}

// to run the test ./vendor/bin/phpunit test/TestResult.php