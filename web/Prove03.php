<?php
session_start();
if(!isset($_SESSION["cart"])){
    //If it doesn't, create an empty array.
    $_SESSION["cart"] = array();
}
//$_SESSION["cart"] = array();
$_SESSION["name"];
$_SESSION["address"];
$_SESSION["email"];
$_SESSION["item"];
$_SESSION["num"];

?>

<!DOCTYPE HTML>   
<html>
<head>
<!-- jQuery library -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<style>
</style>
</head>
<body>  

<?php
// define variables 
$num = 0;

$flowers = array("RS" => "Red Small    ", "RM" => "Red Med      ", "RL" => "Red Large    ", "BS" => "Blue Small   ", 
                 "BM" => "Blue Med     ", "BL" => "Blue Large   ", "YS" => "Yellow Small ", "YM" => "Yellow Med   ", 
				 "YL" => "Yellow Large ", "PS" => "Purple Small ", "PM" => "Purple Med    ", "PL" => "Purple Large ");
?>
<a href="/cart.php">Cart</a>

<br><br>
  <?php
   foreach($flowers as $key => $value){
	//   $pl = htmlspecialchars($key => $value);
	  // echo "<input type='checkbox' name='flower[]' value=$key>$value<br>";
   }
	
?> 
 <form method="POST" action="info.php">
   <div>
   <img src="/world.jpg" alt="World"> 
  <input type="radio" name="item" value="Red Small">RS<br />
  <input type="hidden" name="num" value="1" />
  
  </div>
  <div>
  <input type="radio" name="item" value="Red Medium">RM<br />
  <input type="hidden" name="num" value="2" />
  </div>
  <div>
  <input type="radio" name="item" value="Red Large">RL<br />
  </div>
  <div>
  <input type="radio" name="item" value="Blue Small">BS<br />
  </div>
	<input type="submit" name="submit" value="Submit">  		
			
</form>

  
  <br><br>

</body>
</html>



