<?php
 include 'connection.php';
 if(isset($_POST["country"])){
    // Capture selected country
    $district = $_POST["country"];
    $sql="select * from tb_doctor where district='".$district."'";
    $result = mysqli_query($conn,$sql);

    // Display city dropdown based on country name
    if($district !== 'null'){


    echo "<select class='form-control bfh-states' name='phcid'>";
    while ($row=mysqli_fetch_array($result))
    { ?>
        <option value="<?php echo $row['loginid']; ?>"><?php echo $row['fname']." ".$row['lname']." : ".$row['specs']; ?></option> ?>
 <?php   
    }
        echo "</select>";
    

    }

    if($district == 'null'){
        echo "<select class='form-control bfh-states' name='model' readonly>";
            echo "<option>Select Nearest Doctor </option>";
        echo "</select>";
    } 
}
?>