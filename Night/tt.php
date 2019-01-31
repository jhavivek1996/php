<?php

$a=array(10,50,12,34,45,60);

$c=10;

$flag=0;
for ($i=0; $i <count($a) ; $i++)
{ 
	if($a[$i]==$c)
	{
	$flag=1;
	}
	
}

if($flag==1)
{echo 'value is available';

}
else
{
	echo "value is not avilable";
}

/*$max=0;



for ($f=0; $f <count($arr); $f++) 
	{ 
		if($arr[$f]>$max)
		{
			$max=$arr[$f];
		}
	}
	echo $max."<br>";
for ($i=0; $i<count($arr) ; $i++)
{ 
	#echo $arr[$i];
	
	for ($j=0; $j <count($arr); $j++)

	{ 
		if ($arr[$i]<$arr[$j])
		{
			$temp=$arr[$i];
			$arr[$i]=$arr[$j];
			$arr[$j]=$temp;
		}
	}
}

for ($a=0; $a <count($arr); $a++)
{ 
	echo $arr[$a];
}

for ($m=0; $m <6; $m++)
{ 
	for ($n=0; $n < $m; $n++)
	{ 
		echo "*";
	}
	echo "<br>";
}*/
	

?>