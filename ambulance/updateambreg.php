<?php
	session_start();
	include 'connection.php';

	$phno = $_POST['phno'];
	$email = $_POST['email'];
	$key = $_POST['key'];


	$sql1 = "select * from tb_ambulance where ambkey='".$key."'";
    $result = mysqli_query($conn,$sql1);
    while ($row=mysqli_fetch_array($result))
    {
    	$id=$row['loginid'];
    }

    $sql2="update tb_login set username='".$email."' where id ='".$id."'";
    $ex1 = mysqli_query($conn,$sql2);


	$sql3 = "update tb_ambulance set phno='".$phno."' where ambkey='".$key."'"; //echo $sql3;exit;
	$ex2=mysqli_query($conn,$sql3);

	if($ex2)
	{
		echo "<SCRIPT type='text/javascript'>alert('Ambulance Details Updated Successfully');window.location.replace(\"ambulancehome.php\"); </SCRIPT>";
	}
	else
	{
		echo "<SCRIPT type='text/javascript'>alert('Updation Failed.');window.location.replace(\"ambupdate.php\");</SCRIPT>";
	}

?>
