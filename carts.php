<?php
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
  foreach($_SESSION["shopping_cart"] as $key => $value) {
    if($_POST["code"] == $key){
    unset($_SESSION["shopping_cart"][$key]);
    $status = "<div class='box' style='color:red;'>
    Product is removed from your cart!</div>";
    }
    if(empty($_SESSION["shopping_cart"]))
    unset($_SESSION["shopping_cart"]);
      }   
    }
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
    
}
  if(isset($_COOKIE['logined']) && $_COOKIE['logined']==1)
  {
  $lkey = $_COOKIE['lkey'];
  include 'custheader.php';
  include 'connection.php';

if(!empty($_SESSION["shopping_cart"]))
  {
    $cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
    <!-- <div class="cart_div"><a href="cart.php"><img src="cart-icon.png" />Cart<span><?php echo $cart_count; ?></span></a><a href="index.php">home</a></div> -->
<?php
  }

  if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>

    <br><br>
  <section id="about" style="background-color: #ecf5ff; box-shadow: 0px 0px 12px 0px #aeb8ba;">
    <div class="container ">

      <header class="section-header">
        <h3>Ordered Food Status</h3><br>
      </header>

<table class="table">
  <tbody>
    <tr>
      <td>ITEM NAME</td>
      <td>QUANTITY</td>
      <td>UNIT PRICE</td>
      <td>ITEMS TOTAL</td>
    </tr> 
  <?php   
  foreach ($_SESSION["shopping_cart"] as $product){
  ?>
  <tr>
    <td><?php echo $product["name"]; ?><br />
  <form method='post' action=''>
  <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
  <input type='hidden' name='action' value="remove" />
  <button type='submit' class='remove'>Remove Item</button>
  </form>
  </td>
  <td>
  <form method='post' action=''>
  <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
  <input type='hidden' name='action' value="change" />
  <select name='quantity' class='quantity' onchange="this.form.submit()">
  <option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
  <option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
  <option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
  <option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
  <option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
  </select>
  </form>
  </td>
  <td><?php echo "$".$product["price"]; ?></td>
  <td><?php echo "$".$product["price"]*$product["quantity"]; ?></td>
  </tr>
  <?php
  $total_price += ($product["price"]*$product["quantity"]);
  }
  ?>
  <tr>
  <td colspan="5" align="right">
  <strong>TOTAL: <?php echo "$".$total_price; ?></strong>
  </td>
  </tr>
  </tbody>
</table>    
  <?php
}else{
  echo "<h3>Your cart is empty!</h3>";
  }
?>

<?php  ?>
<br><br><br><br><br><br><br>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

   <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: green;">Inter-District Travel Pass Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <?php
        $result = mysqli_query($conn,$sql);
        while ($row=mysqli_fetch_array($result))
              { ?>
        <b>Date :</b> <?php echo $row['curdate']; ?> <br>
        <b>Travel Date :</b> <?php echo $row['traveldate']; ?> <br>
        <b>Return Date :</b> <?php echo $row['returndate']; ?> <br>
        <b>From Place :</b> <?php echo $row['fromplace']; ?> <br>
        <b>To Place :</b> <?php echo $row['toplace']; ?> <br>
        <b>Vehicle Number :</b> <?php echo $row['carregno']; ?> <br>
        <b>Total Passengers :</b> <?php echo $row['personcount']; ?> <br>
        <b>Passenger(s) Name(s) :</b> <?php echo $row['namelist']; ?> <br>
        <b>Purpose :</b> <?php echo $row['purpose']; ?> <br>
        <h5>Feedback : <?php echo $row['feedback']; ?></h5>
        <p style="color: red;">NB : Take a screenshot of this report while travelling.</p>

      </div>
      <div class="modal-footer">
      <p style="padding-right: 170px;padding-top: 20px;"> <b>Status :</b> <?php if($row['status']=='0')
                  {
                    echo "<font color='grey'><b>Not Viewed</b></font>";
                  }
                  else if ($row['status']=='1')
                  {
                    echo "<font color='green'><b>Approved &nbsp;</b></font><img src='suc.png' height='40px' width='40px'>";
                  }
                  else
                  {
                    echo "<font color='red'><b>Rejected &nbsp;</b></font><img src='fail.png' height='50px' width='50px'>";
                  } ?> <br>

      <?php } ?></p>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>      </div>
    </div>
  </div>
</div>
      </div>

    </div>
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
      <!--    <a href="https://itmission.kerala.gov.in/" target="_blank" rel="noopener noreferrer"><img src="resources/images/itmission.png" alt="IT Mission Logo" style="width: 100px; height: 70px;" class="mt-3"></a>
      --> </div>

        <div class="col-lg-3 col-md-6 footer-contact">

          <h4 style="margin-top: 20px;">Contact Us</h4>
          <i class="fa fa-envelope mr-1 text-white mb-2"></i>directoratehealthcare@kerala.gov.in<br> <a href='resources/downloads/helpline.pdf' class="text-white view"><i class="fa fa-phone mr-1 text-white"></i>Helpline</a>

          <!--   -->
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
