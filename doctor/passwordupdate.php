<?php
	include 'connection.php';

	$pass = md5($_POST['curpass']);
	$newpass = md5($_POST['pass']);
	$conpass = md5($_POST['conpass']);

  $sql="select password from tb_login where id ='".$_COOKIE['lkey']."'";

  $result = mysqli_query($conn,$sql);
  $a=0;
  while ($row=mysqli_fetch_array($result))
  {
    $currentpass=$row['password'];
  }
  if($currentpass==$pass)
  {
    $sql="update tb_login set password ='".$newpass."' where id='".$_COOKIE['lkey']."'";
    $ex1=mysqli_query($conn,$sql);

    if($ex1)
    {
      echo "<SCRIPT type='text/javascript'>alert('Password Updated successfully');
       window.location.replace(\"drhome.php\");
     </SCRIPT>";
    }
    else
    {
      echo"<script> alert('Password Updation Failed')</script>";
    }
  }
  else
  {
     echo "<SCRIPT type='text/javascript'>alert('Invalid Current Password');
       window.location.replace(\"passwordchange.php\");
     </SCRIPT>";
  }

    
    
?>
