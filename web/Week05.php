<?php
session_start();

if(!isset($_SESSION["cart"])){
    //If it doesn't, create an empty array.
    $_SESSION["cart"] = array();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Prove Week 5</title>
	<script>
	</script>
	<link rel="stylesheet" type="text/css" href="Prove03style.css">
</head>

<body>
<?php
  include_once('./dbConnect.php');
 $statement = $db->prepare("SELECT flower_type, flower_size, flower_price, description, image FROM flower");
 $statement->execute();
 
 ?>
 <form method="POST" action="info05.php">
 <?php
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	?>
	<div id="flowers" ><p>
     <img src="<?php echo $row['image'] ?>" alt="Flower"> <br>
     <input type="radio" name="item" value="<?php echo $row['description'] ?>">
	 <?php echo $row['description'] ?><br /></P> 
   </div>
<?php
}
 
 ?>
 	<div id="sub" ><input type="submit" name="submit" value="Submit"></div>  		
			
</form>
 </body>
</html>