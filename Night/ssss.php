<?php

function rockstar($arr,$arra)
{
	$even=0;
	$odd=0;
	$even_arr=array();
	$odd_arr=array();

	for ($i=0; $i <$arra ; $i++)
	{ 		$count=0;
			echo " ";
			
			if($arr[$i]%2==0)		
				{	
					$even ++;

					$count++; 	
					$even_arr[]=$arr[$i];
					
					#echo $arr[$i]."<br>";
					
				}

			elseif($arr[$i]%2!=0)
				{	
					$odd ++;

					$count ++;
					$odd_arr[]=$arr[$i];
					#echo $arr[$i];
					 
				}
			

			
			

	}
	
		for ($i=0; $i <count($odd_arr) ; $i++) 
		{ 
			echo $odd_arr[$i];
			
		}

					echo"<br/>";
		for ($i=0; $i <count($even_arr) ; $i++) 
		{ 
			echo $even_arr[$i];
			
		}




	echo "<br><br>";

	#print_r($even_arr);
	echo "<br><br>";
	#print_r($odd_arr);


	echo "<br><br>";


	echo "The even ".$even."<br>";
	echo "The odd ".$odd;
}

	$arr=array(1,2,3,4,5,6,7,8,9,10,11,12,13);
	$arrar=count($arr);
	rockstar($arr, $arrar);
?>