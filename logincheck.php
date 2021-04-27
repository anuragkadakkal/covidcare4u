<?php 
    session_start();
    include 'connection.php';
    $usr = $_POST["username"];
    $en = md5($_POST["pass"]);
    /*unset($_SESSION['username']);
    unset($_SESSION['pass']);*/

    $sql="select id,status,utype from tb_login where username='".$usr."' and password='".$en."'";

    $result = mysqli_query($conn,$sql);
	$a=0;
	while ($row=mysqli_fetch_array($result))
	{
		$a++;
		$b=$row['id'];
		$c=$row['utype'];
		$d=$row['status'];
	}
    if($a>0)
	{
		if($d==1)
		{
			setcookie("lkey",$b);
			setcookie("logined",1);
			if ($c==0)
			{
				header("location:admin/adminhome.php?");
			}
			else if($c==1)
			{
				header("location:customerhome.php");
			}
			else if($c==2)
			{
				header("location:police/policehome.php");
			}
			else if($c==3)
			{
				header("location:kitchen/kitchenhome.php");
			}
			else
			{
				header("location:karunyamedicals/medicalhome.php");
			}
		}
		else if ($d==2)
	    {
	    	echo "<SCRIPT type='text/javascript'>alert('Rejected by Admin.....!!');
	        window.location.replace(\"index.php\");
	        </SCRIPT>";
	    }
	    else
		{
        	echo "<SCRIPT type='text/javascript'>alert('Approval Pending.....!!');
            window.location.replace(\"index.php\");
            </SCRIPT>";
		}
	}
	else
	{
    	echo "<SCRIPT type='text/javascript'>alert('Invalid User.....!!');
        window.location.replace(\"index.php\");
        </SCRIPT>";
	}

?>

    
  
 ?>