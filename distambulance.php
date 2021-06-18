<?php
 include 'connection.php';
 if(isset($_POST["country"])){
    // Capture selected country
    $district = $_POST["country"];
    $sql="select * from tb_ambulance inner join tb_login on tb_login.id=tb_ambulance.loginid where district='".$district."' and status='1'";
    $result = mysqli_query($conn,$sql);

    // Display city dropdown based on country name
    if($district !== 'null'){


    echo "<select class='form-control bfh-states' name='ambid'>";
    while ($row=mysqli_fetch_array($result))
    { ?>
        <option value="<?php echo $row['ambkey']; ?>"><?php echo $row['fname']." ".$row['lname']." - ".$row['brand']." ".$row['model']; ?></option> ?>
 <?php   
    }
        echo "</select>";
    

    }

    if($district == 'null'){
        echo "<select class='form-control bfh-states' name='model' readonly>";
            echo "<option>Select Nearest PHC </option>";
        echo "</select>";
    } 
}
?>