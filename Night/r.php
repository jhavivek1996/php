<?php


$a=array(1,2,3,4,5,6,7,8,9,10,11);

$c=$a[9];



for($i=0;$i<count($a);$i++)
{
	
	echo $a[$i];

	if ($a[$i]%2)
		{
			echo " =It is even<br>";
		}
	else
		{
			echo " =It is odd<br>";
		}
}