<?php
 include 'connection.php';
 if(isset($_POST["country"]))
 {
    $district = $_POST["country"];
    $sql="select * from tb_doctor inner join tb_login on tb_login.id=tb_doctor.loginid where district='".$district."' and status!='2'";
    $result = mysqli_query($conn,$sql);

    if($district !== 'null')
    {
       
            echo "<select class='form-control bfh-states' name='phcid'>";
            while ($row=mysqli_fetch_array($result))
            { ?>
                <option value="<?php echo $row['loginid']; ?>"><?php echo $row['fname']." ".$row['lname']." : ".$row['specs']; ?></option> ?>
                    <?php   
            }
       
    }

    if($district == 'null'){
        echo "<select class='form-control bfh-states' name='model' readonly>";
            echo "<option>Select Nearest Doctor </option>";
        echo "</select>";
    } 
}
?>
