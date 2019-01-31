
 
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Sample Form</title>
 </head>
 <body>
 	
 	<form method="POST">
 	<h1>Please Input your name</h1>
 	<input type="text" name="vivek" required>&nbsp;
 	<input type="submit" name="submit" value="Submit Name">
 	</form><br>

 	
 
 </body>
 </html>

 <?php
 $vivek=$_POST['vivek']; 


 echo "<h3>Hello, $vivek</h3>";
 echo "Your user agent is:".$_SERVER['HTTP_USER_AGENT']."<br>";
 	$curr=basename($_SERVER['PHP_SELF']);
 	echo "$curr <br>";

 	$url='http://localhost/easyphp/Night/logic.php?vivek=&submit=Submit+Name';
 	$url=parse_url($url);
 	echo "Scheme: ".$url['scheme']."<br>";

 	echo "Host: ".$url['host']."<br>";
 	echo "Path: ".$url['path']."<br>";


 	#header('Location:https://www.google.com/');

 
// pass valid/invalid emails
		$email = "jhavivek260@gmail.com";
		if (filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			echo " ".$email." is Valid.<br>";
		}
		else
		{
			echo " ".$email." Not Valid.<br>";


		}
		$a=10000000;
		$b=2000000;
		$c=3000000;

	echo "<table>
 		
 			<tr><td>Vivek</td>
 				<td>$a</td>
 			</tr>
 			<tr><td>Satish</td>
 				<td>$b</td>
 			</tr>
 			<tr><td>Minesh</td>
 				<td>$c</td>
 			</tr>

 	</table>";
 ?>