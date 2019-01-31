<!DOCTYPE html>
<html>
<head>
	<title>Vivek Jha</title>
</head>
<body>
	<script type="text/javascript">
		function vivek()
		{
			window.location="https://google.com";
		}
	</script>
				<input type="submit" onclick="vivek()">
				<input type="submit" onclick=window.open("https://www.fb.com")>
</body>
</html>


<?php


function vivek($m,$n)
{
	$a=0;
	$b=0;


	for ($i=0; $i <$n ; $i++)
	{  


		if($m[$i]%2!=0) 
			$a++;
		
		elseif ($m[$i]%2==0)
			$b++;
	}
		echo $a."<br>";
		echo $b;
	
}

$m=array(1,2,3,4,5,6,7,8,9);
$n=count($m);
vivek($m,$n);
?>
















