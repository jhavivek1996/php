<?php


$vivek=array(1,2,3,4,5,6,7,8,9,1,3,6,11,11,11);
$kk=array();
#$kk['10']=20;







for ($i=0; $i <count($vivek) ; $i++) 
{ 
	$count=0;
	for ($j=0; $j < count($vivek); $j++)
	{ 		
		if ($vivek[$i]==$vivek[$j])
	    {
			$count++;
			
		}

	}
	$kk[$vivek[$i]]=$count;
}


print_r($kk);
/*
for ($k=0; $k <count($vivek); $k++)
{ 
	echo $vivek[$k];

}
echo "<br>";
$t=$vivek;

?>

<?php
/*
$h=1;
for ($i=0; $i <10; $i++) 
{ 
	for ($j=0; $j <$i ; $j++) 
	{ 
		echo $i;
		$h++;

		
	}echo "<br>";
}*/
?>

<html>
   <body>
   
      <?php require("logic.php"); ?>
      <p>This is an example to show how to include PHP file!</p>
      
   </body>
</html>