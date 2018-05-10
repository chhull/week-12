<?php
session_start();
$_SESSION["name"] = htmlspecialchars($_POST["name"]);
$_SESSION["email"] = htmlspecialchars($_POST["email"]);
$_SESSION["address"] = htmlspecialchars($_POST["address"]);


?>
<!DOCTYPE html>
<html>
<head>
<title>Confirmation Page</title>
</head>
<body>
    <p> <?php echo $_SESSION["name"] ?></p>
	<p>Your address is: <?php echo $_SESSION["address"] ?></p>
	<p>Your email is: <?php echo $_SESSION["email"] ?></p>
	
	foreach ($_SESSION["cart"] as $fl)
{
	$flower_c = htmlspecialchars($fl);
	echo "<p>$flower_c</p>";
}
<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>
</body>
</html>