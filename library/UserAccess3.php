<?php

include_once($_SERVER['DOCUMENT_ROOT']."/FSILogin/Constants/Constants.php");
	class UserAccess2{
		
			function LogInUser2($user_id,$user_passwd,&$strMessage){
						$this->link=mysqli_connect(HOST_NAME,HOST_USER,HOST_PASSWORD);
						
								if(!$this->link){
									$strMessage="Could not connect to the dbserver".mysqli_error($this->link);
									return false;
								}
								
								if(!mysqli_select_db($this->link,DB_NAME))
								{
									$strMessage="Cannot connect to database".mysqli_error($this->link);
									mysqli_close($this->link);
									return false;
									}
						
				$query="SELECT user_passwd from user WHERE user_id='".$user_id."'";
				if($myTable=mysqli_query($this->link,$query))
				{
						if(mysqli_num_rows($myTable)>0)
						{
							$myRow=mysqli_fetch_array($myTable);
							
							if($myRow[0]==$user_passwd){
								$strMessage="Log in Success"; 
								mysqli_close($this->link);
								return true;
							
							}
							else{
								$strMessage="Password is incorrect";
								mysqli_close($this->link);
								return false;
							}
						}
						else
						{
							$strMessage="Username does not exist";
							mysqli_close($this->link);
							return false;
						}
					
				}
				else
				{
					$strMessage="Unable to login:".mysqli_error($this->link);
					mysqli_close($this->link);
					return false;
				
				}



			}
	}					
?>								