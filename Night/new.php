<?php

function gautam($brc,$adn)
{
	$odd=0;
	$even=0;
	for ($i=0; $i <$adn; $i++)
	{ 
		if ($brc[$i]%2==0)
		{
			$even++;
		}
		elseif($brc[$i]%2!=0)
		{
			$odd++;
		}
	}
	echo $even;
	echo "<br>";
	echo $odd;

}

$brc=array(1,2,3,4,5,6,7,8,10);
$n=count($brc);
gautam($brc,$n);


