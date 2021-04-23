<?php
session_start();
include('connection.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($conn,"SELECT * FROM `tb_foodreg` WHERE `fkey`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['fname'];
$code = $row['fkey'];
$desc = $row['fdesc'];
$price = $row['fprice'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'desc'=>$desc,
	'price'=>$price,
	'quantity'=>1)
);
}

?>
<html>
<head>
<title>Demo</title>
</head>
<body>
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<span><?php echo $cart_count; ?></span>
<?php
}

$result = mysqli_query($conn,"SELECT * FROM `tb_foodreg`");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['fkey']." />
			  <div class='name'>".$row['fname']."</div>
		   	  <div class='price'>$".$row['fprice']."</div>
		   	  <div class='price'>$".$row['fdesc']."</div>
			  <button type='submit' class='buy'>Buy Now</button>
			  </form>
		   	  </div>";
        }
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

</div>
</body>
</html>