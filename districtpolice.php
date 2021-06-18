<?php
 include 'connection.php';
 if(isset($_POST["country"])){
    // Capture selected country
    $district = $_POST["country"];
    $sql="select * from tb_policestation inner join tb_login on tb_login.id=tb_policestation.loginid where district='".$district."' and status='1'";
    $result = mysqli_query($conn,$sql);

    if($district !== 'null'){


    echo "<select class='form-control bfh-states' name='pcid'>";
    while ($row=mysqli_fetch_array($result))
    { ?>
        <option value="<?php echo $row['loginid']; ?>"><?php echo $row['address']; ?></option> ?>
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