<?php 
// PHP program to count number of even 
// and odd elements in an array 

function CountingEvenOdd( $arr, $arr_size) 
{ 
	$even_count = 0;		 
	$odd_count = 0;			 
		
	
	for( $i = 0 ; $i < $arr_size ; $i++) 
	{ 
		
		if ($arr[$i]%2!=0) 
			$odd_count ++ ;

		elseif($arr[$i]%2==0)				
			$even_count ++ ;		 
	} 

	echo $even_count."<br>";
	echo $odd_count ;	 
} 


	$arr = array(2, 3, 4, 5, 6, 7, 9, 10,20); 
	$n = count($arr); 
	CountingEvenOdd($arr, $n); 


?> 
