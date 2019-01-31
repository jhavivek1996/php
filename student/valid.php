<?php

include 'db.php';
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE HTML>  
<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <title>Validation in PHP</title>
</head>
<body>  
<h2 class="container">PHP Form Validation Example</h2>
<table>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<td>  Name: <input type="text" name="name">
  <br><br></td>
 <td> E-mail: <input type="text" name="email"></td>
  <br><br>
 <td> Website: <input type="text" name="website"></td>
  <br><br>
 <td> Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br></td>
<td>  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br></td>
 <td> <input type="submit" name="submit" value="Submit"> </td> 
</form>
</table>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>