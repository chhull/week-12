<?php
session_start();

$t = $_GET['_delete'];
if ($t > -1) {
	unset($_SESSION["cart"][$t]);
}
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="Week05style.css">
</head>
<body>
<a href="Week05.php">Continue Shopping</a><br>
<a href="/Week05checkout.php">Checkout</a>
<h1>Shopping Cart</h1><br><br>

<?php

foreach($_SESSION['cart'] as $x => $x_value) {	
	?>
	<p> <?php
   echo $x;
   
   ?>
   <br>
   <input type="text" placeholder="1" maxlength="4" size="4" id="<?php echo $x ?>" name="num">
   <?php
   echo "<br>";
   echo "<a href='{$_SERVER["PHP_SELF"]}?_delete={$x}'>Delete</a>";
   ?>
   </p>
   <?php
}
?>

</body>
</html>