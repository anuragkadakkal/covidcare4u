<?php 
    session_start();
    include 'connection.php';
    
	if(isset($_POST['post']))
	{
		$usr = $_POST["username"];
    	$en = md5($_POST["pass"]);
		$url = "https://www.google.com/recaptcha/api/siteverify";
		$data = [
			'secret' => "6LfhgMoaAAAAAF1UXZ9_ASAEBlptTWH600da8sda",
			'response' => $_POST['token'],
		];

		$options = array(
		    'http' => array(
		      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		      'method'  => 'POST',
		      'content' => http_build_query($data)
		    )
		  );

		$context  = stream_context_create($options);
  		$response = file_get_contents($url, false, $context);

		$res = json_decode($response, true);
		echo "sdsds";exit;
		if($res['success'] == true)
		{
			$sql="insert into tb_logginglogin(logtoken,loginusername,curdate) values('".$_POST['token']."','".$usr."','".date("d-m-Y h:i:sa")."')";
			$result = mysqli_query($conn,$sql);
			
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
					if ($c==0)
					{
						$_SESSION["logined"] = 1;
						header("location:admin/adminhome.php"); 
						/*Admin SESSION - Completed - Validation Completed*/
					}
					else if($c==1)
					{
						setcookie("logined",1);
						header("location:customerhome.php");
						/*Customer SESSION - Completed - Validation Completed*/
					}
					else if($c==2)
					{
						$_SESSION["logined"] = 1;
						header("location:police/policehome.php"); 
						/*Police Station SESSION - Completed - Validation Completed*/
					}
					else if($c==3)
					{
						$_SESSION["logined"] = 1;
						header("location:kitchen/kitchenhome.php");
						/*Community SESSION - Completed - Validation Completed*/
					}
					else if($c==4)
					{
						$_SESSION["logined"] = 1;
						header("location:karunyamedicals/medicalhome.php"); 
						/*Karunya Medicals SESSION - Completed - Validation Completed*/
					}
					else if($c==5)
					{
						$_SESSION["logined"] = 1;
						header("location:phc/phchome.php");
						/*PHC SESSION - Completed - Validation Completed*/
					}
					else if($c==6)
					{
						$_SESSION["logined"] = 1;
						header("location:doctor/drhome.php"); 
						/*Doctor SESSION - Completed - Validation Completed*/
					}
					else if($c==7)
					{
						$_SESSION["logined"] = 1;
						header("location:ambulance/ambulancehome.php"); 
						/*Ambulance SESSION - Completed - Validation Completed*/
					}
					else{}
				}
				else if ($d==2)
			    {
			    	echo "<SCRIPT type='text/javascript'>alert('Permission Denied.....!!');
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
		}
	}
	else
	{
		echo "<SCRIPT type='text/javascript'>alert('Google reCaptcha Failed');
	        window.location.replace(\"index.php\");
	        </SCRIPT>";
	}
?>