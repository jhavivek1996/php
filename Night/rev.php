<?php
/*$s="vivek Jha";


$v=strlen($s);

for ($i=$v-1; $i >=0 ; $i--)
{ 
	echo $s[$i];
}
*/

/*


$ss=count($kk);
$ss1=count($jj);

for ($i=0; $i <$ss; $i++) 
{ 
	for ($j=0; $j <2 ; $j++)
	{ 
	echo $kk[$i][$j];
	}
}
echo "<br>";

for ($i=0; $i <$ss1; $i++)
{ 
	for ($j=0; $j <2 ;$j++)
	{ 
	echo $jj[$i][$j];
	}
}*/

/*
function multiply($a,$b,&$c) 
{ 
	$N = 2; 
	for ($i = 0; $i < $N; $i++) 
	{ 
		for ($j = 0; $j < $N; $j++) 
		{ 
			$c[$i][$j] = 0; 
			for ($k = 0; $k < $N; $k++)
			{
				$c[$i][$j] += $a[$i][$k] * $b[$k][$j];
			} 
				 
		} 
	} 
} 


$a = array(array(1, 1), array(2, 2)); 

$b = array(array(3, 3), array(4, 4)); 

multiply($a, $b, $c); 
$N = 2; 	
for ($i = 0; $i < $N; $i++) 
{ 
	for ($j = 0; $j < $N; $j++) 
	{ 
		echo ($c[$i][$j]); 
		echo(" "); 
	} 
	echo ("\n"); 
} 
*/


$a = array(array(1, 1), array(2, 2)); 

$b = array(array(3, 3), array(4, 4));

$c=array();
for ($i=0; $i <2; $i++)
{ 
	
	for ($j=0; $j <2; $j++)
	{
		$temp=0;
		for ($k=0; $k <2 ; $k++)
		{ 
		 	 $temp+=$a[$i][$j] *$b[$k][$i];

		 	 echo '<br/>' ;
		} 
	    $c[$i][$j]=$temp;	
	}
	
}

print_r($c);




?>
 

 