<?php
		session_start();
		include('iinc/dbdb.php');

					$sql5 = "SELECT * FROM user";

					$res = mysqli_query($con5,$sql5);
		$user_id=$_POST['user_id'];
		$user_passwd=$_POST['user_passwd'];
		
		$user_id = stripcslashes($user_id);
		$user_passwd = stripcslashes($user_passwd);
		$user_id = mysqli_real_escape_string($con5,$user_id);
		$user_passwd = mysqli_real_escape_string($con5,$user_passwd);
		
		include_once($_SERVER['DOCUMENT_ROOT']."/FSILogin/Library/UserAccess.php");
		
		
		$strMessage;
		
		$UserAccess = new UserAccess();
		
		//echo $user_id;
		//echo $user_passwd;
		if ($UserAccess->LogInUser($user_id,$user_passwd,$strMessage))
		{
			$_SESSION['id'] = $_POST['user_id'];
			echo "<META HTTP-EQUIV = 'refresh' Content = '0; URL=/FSILogin/user_management/user/home.php'>";
			exit;
		}

		else{
			include_once($_SERVER['DOCUMENT_ROOT']."/FSILogin/Library/UserAccess2.php");
			//echo $strMessage;
			$UserAccess = new UserAccess2();
		if ($UserAccess->LogInUser($user_id,$user_passwd,$strMessage))
		{
			$_SESSION['id'] = $_POST['user_id'];
			echo "<META HTTP-EQUIV = 'refresh' Content = '0; URL=/FSILogin/user_management/admin/home.php'>";
			exit;
		}
				else{
			$_SESSION['Message']= $strMessage;
			echo "<META HTTP-EQUIV = 'refresh' Content = '0; URL=index.php'>";
			//echo $strMessage;
		}
		
		}
	?>		
	