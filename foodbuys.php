<?php
session_start();
if(isset($_POST['kitkey']))
{
	$lkey=$_POST['kitkey'];
	$_SESSION["kitkey"]=$lkey;
	$_SESSION["fname"]=$_POST['fname'];
	$_SESSION["address"]=$_POST['address'];
	$_SESSION["phno"]=$_POST['phno'];
	$_SESSION["gender"]=$_POST['gender'];
	$_SESSION["district"]=$_POST['district'];
	$_SESSION["pincode"]=$_POST['pincode'];
}
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM tb_foodreg WHERE fkey='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["fkey"]=>array('name'=>$productByCode[0]["fname"],'desc'=>$productByCode[0]["fdesc"], 'code'=>$productByCode[0]["fkey"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["fprice"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["fkey"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["fkey"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}

  if(isset($_COOKIE['logined']) && $_COOKIE['logined']==1)
  {
  $lkey = $_COOKIE['lkey'];
  include 'custheader.php';

?>
    <br><br>
	<section id="about" style="background-color: #ecf5ff; box-shadow: 0px 0px 12px 0px #aeb8ba;">
		<div class="container ">

			<header class="section-header">
				<h3>Add Foods To Cart - Community Kitchen</h3><br>
			</header>
			
					

<div id="shopping-cart">

<p align="right"><a id="btnEmpty" href="foodbuys.php?action=empty"><button class="btn btn-info">Empty Cart</button></a></p>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart table table-bordered" cellpadding="10" cellspacing="1" >
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<!-- <th style="text-align:left;">Description</th> -->
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php	$fooditems="";	
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><?php echo $item["name"];?></td>
				<!-- <td><?php //echo $item["fdesc"]; ?></td> -->
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>

		<?php		$fooditems=$fooditems.($item["name"]." - ".$item["quantity"]." , ");  ?>

				<td style="text-align:center;"><button class="btn btn-warning"><a href="foodbuys.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" height="28px" width="26px" alt="Remove Item" /></a></button></td>
				</tr>
				<?phpheight="28px" width="26px"
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td  align="right"><strong>Total:</strong></td>
<td align="right"><strong><?php echo $total_quantity; ?></strong></td>



<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); $totalprice=number_format($total_price, 2); ?></strong></td>
<td>

<form action="placeorderreg.php" method="POST">
	<input type="hidden" name="kitkeys" value="<?php echo $_SESSION['kitkey'];?>">
	<input type="hidden" name="fname" value="<?php echo $_SESSION['fname'];?>">
	<input type="hidden" name="address" value="<?php echo $_SESSION['address'];?>">
	<input type="hidden" name="phno" value="<?php echo $_SESSION['phno'];?>">
	<input type="hidden" name="gender" value="<?php echo $_SESSION['gender'];?>">
	<input type="hidden" name="district" value="<?php echo $_SESSION['district'];?>">
	<input type="hidden" name="pincode" value="<?php echo $_SESSION['pincode'];?>">


	<input type="hidden" name="totprice" value="<?php echo $totalprice;?>">
	<input type="hidden" name="fooditems" value="<?php echo $fooditems;?>">
	<button type="submit" class="btn btn-primary">Buy</button></a></td>
</form>

	
</tr>
</tbody>
</table>	
<!-- 




 -->
	
  <?php
} else {
?>
<div class="no-records"><p align="center" style="color: red">Your Cart is Empty</p></div>
<?php 
}
?>
</div>
<div id="product-grid">
	<div class="txt-heading"><br><header class="section-header">
				<h5 align="center">Available Food Items</h5><br>
			</header></div>

		 <!-- --------------------------------------------------------------- -->	

	<table data-toggle="table" data-height="460" data-pagination="true" data-search="true" id="dataTable">
			<tr>
				<th style="text-align: center">Name</th>
				<th style="text-align: center">Unit Price</th>
				<th style="text-align: center">Quantity</th>
				<th style="text-align: center">Remove</th>
			</tr>
		<tbody>
				
			<?php
			$curdate = date("l jS \of F Y"); //echo $curdate;exit;
				$product_array = $db_handle->runQuery("SELECT * FROM tb_foodreg where loginid='".$_SESSION['kitkey']."' and ftime='".$curdate."' and fqty>'0'");
				if (!empty($product_array)) { 
					foreach($product_array as $key=>$value){ ?>
						<form method="post" action="foodbuys.php?action=add&code=<?php echo $product_array[$key]["fkey"]; ?>">
							<tr>
								<td style="text-align: center"><?php echo $product_array[$key]["fname"]; ?></td>
								<td style="text-align: center"><?php echo "$".$product_array[$key]["fprice"]; ?></td>
								<td style="text-align: center"><input type="text" class="form-control input-sm" name="quantity" value="1" size="1" /></td>
								<td style="text-align: center"><input type="image" src="cart-icon.png" class="btn btn-info" border="0" alt="Submit"/></td>
							</tr>
						</form>	
			<?php
					}
				}
			?>
		</tbody>
	</table>





			 <!-- --------------------------------------------------------------- -->
</div>


		</div><br><br><br><br>
	</section>

	
<footer id="footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">

				<div class="col-lg-4 col-md-6 footer-info">
					<br><h4>Disclaimer</h4>
					<p class="text-justify">Conceptualized and designed by Anurag A engaging Master Of Computer Application in Amal Jyothi College Of Engineering, Kanjirampally, Kottayam.
						</p>

					
				</div>

				<div class="col-lg-4 col-md-6 footer-links">
					<br><h4>Useful Links</h4>
					<ul>
						
						<li><a href="http://dhs.kerala.gov.in/" target="_blank" rel="noopener noreferrer">Directorate of Health Services</a></li>
						<li><a href="https://play.google.com/store/apps/details?id=com.qkopy.prdkerala&amp;hl=en_IN" target="_blank" rel="noopener noreferrer">GoK - Direct Kerala
								app</a></li>
						<li><a href="https://play.google.com/store/apps/details/?id=in.nic.kerala.nicscanner" target="_blank" rel="noopener noreferrer">NIC QR Scanner</a></li>
					<li>	
					</ul>
			<!--		<a href="https://itmission.kerala.gov.in/" target="_blank" rel="noopener noreferrer"><img src="resources/images/itmission.png" alt="IT Mission Logo" style="width: 100px; height: 70px;" class="mt-3"></a>
			-->	</div>

				<div class="col-lg-3 col-md-6 footer-contact">

					<h4 style="margin-top: 20px;">Contact Us</h4>
					<i class="fa fa-envelope mr-1 text-white mb-2"></i>directoratehealthcare@kerala.gov.in<br> <a href='resources/downloads/helpline.pdf' class="text-white view"><i class="fa fa-phone mr-1 text-white"></i>Helpline</a>

					<!-- 	 -->
					<h4 class="mt-5">Hit Count:&emsp;1</h4>
				</div>

			</div>
		</div>
	</div>
	<?php
include 'mainfooter.php';
}

	else
	{
		Header("location:index.php");
	}
?>