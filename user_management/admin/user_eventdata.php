
<?php
	include('inc/db3.php');
	include('inc/db10.php');

	$sql10 = "SELECT * FROM user WHERE user_id='".$_SESSION['user_id']."'";

	$res10 = mysqli_query($con10,$sql10);
	while($row10 = mysqli_fetch_array($res10))
						{
															

							$id10     		=$row10['user_id'];

							$name10			=$row10['user_passwd'];
							$description10	=$row10['lname'];
							$sec_id10         =$row10['SECTION_ID'];
							$odg10			=$row10['ODG_ID'];
							$cirss10			=$row10['CIRSS_ID'];
							$cprsd10			=$row10['CPRSD_ID'];
							$afsd10			=$row10['AFSD_ID'];
	$page=$_GET["page"];
	if($page=="" || $page=="1")
	{
		$page1=0;
	}
	else
	{
		$page1=($page*5)-5;
	}
	
	$sql3 = "SELECT * FROM documents where page='1' order by date desc limit $page1,5";
	$sql33 = "SELECT * FROM documents where page='1' order by date desc ";
	$res3 = mysqli_query($con3,$sql3);
						}

?>

<?php
	include('inc/db2.php');

	$sql2 = "SELECT * FROM user WHERE user_id='".$_SESSION['user_id']."'";

	$res2 = mysqli_query($con2,$sql2);

?>

<?php
		
		//echo $user_id;
		//echo $user_passwd;
		
	
			while($row2 = mysqli_fetch_array($res2))
			{
				
				$id     		=$row2['user_id'];
				$name			=$row2['user_passwd'];
				$description	=$row2['lname'];
				$sec_id         =$row2['SECTION_ID'];
				$odg			=$row2['ODG_ID'];
				$cirss			=$row2['CIRSS_ID'];
				$cprsd			=$row2['CPRSD_ID'];
				$afsd			=$row2['AFSD_ID'];
		
				while($row3 = mysqli_fetch_array($res3)){
					$user     			=$row3['user'];
					$upload_name        =$row3['name'];
					$file_name			=$row3['fileName'];
					$description		=$row3['description'];
					$doc_sec_id			=$row3['SECTION_ID'];
					$page          	    =$row3['page'];
					$path				=$row3['path'];	
					$doc_odg			=$row3['ODG_ID'];
					$doc_cirss			=$row3['CIRSS_ID'];
					$doc_cprsd			=$row3['CPRSD_ID'];
					$doc_afsd			=$row3['AFSD_ID'];
					$aprvl				=$row3['adm_aprvl'];
					
					if(($page == 1 )&& ($aprvl == 1) && ($sec_id == $doc_sec_id)){
						if(($odg == 1)&&($doc_odg== 1)){
					echo "</br><div class='media stream'><div class='stream-list'><div class='media-body'>";
								//echo "$fname $mname $lname";
								echo  "<p><h3 class='stream-author'>  " ,"(".$user.")"
								," </h3><small>date here</small>".$upload_name ."</p><p>Description:</p>"
								,"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class='stream-text'>". $description . 
								"</div>
								<div class='stream-options'>
												<a href='download_file.php?dow=$path' class='btn btn-small'>
													<i class='icon-download shaded'></i>
													<h6 class='stream-author'>".$file_name."</h6>
												</a>";
								echo "</div></div></div></div>";
					}
					
						else if(($cirss == 1)&&( $doc_cirss== 1)){
					echo "</br><div class='media stream'><div class='stream-list'><div class='media-body'>";
								//echo "$fname $mname $lname";
								echo  "<p><h3 class='stream-author'>  " ,"(".$user.")"
								," </h3><small>date here</small>".$upload_name ."</p><p>Description:</p>"
								,"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class='stream-text'>". $description . 
								"</div>
								<div class='stream-options'>
												<a href='download_file.php?dow=$path' class='btn btn-small'>
													<i class='icon-download shaded'></i>
													<h6 class='stream-author'>".$file_name."</h6>
												</a>";
								echo "</div></div></div></div>";
					}
					
						else if(($cprsd == 1)&&( $doc_cprsd== 1)){
				echo "</br><div class='media stream'><div class='stream-list'><div class='media-body'>";
								//echo "$fname $mname $lname";
								echo  "<p><h3 class='stream-author'>  " ,"(".$user.")"
								," </h3><small>date here</small>".$upload_name ."</p><p>Description:</p>"
								,"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class='stream-text'>". $description . 
								"</div>
								<div class='stream-options'>
												<a href='download_file.php?dow=$path' class='btn btn-small'>
													<i class='icon-download shaded'></i>
													<h6 class='stream-author'>".$file_name."</h6>
												</a>";
								echo "</div></div></div></div>";
					}
					
					else if(($afsd == 1)&&( $doc_afsd== 1)){
					echo "</br><div class='media stream'><div class='stream-list'><div class='media-body'>";
								//echo "$fname $mname $lname";
								echo  "<p><h3 class='stream-author'>  " ,"(".$user.")"
								," </h3><small>date here</small>".$upload_name ."</p><p>Description:</p>"
								,"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class='stream-text'>". $description . 
								"</div>
								<div class='stream-options'>
												<a href='download_file.php?dow=$path' class='btn btn-small'>
													<i class='icon-download shaded'></i>
													<h6 class='stream-author'>".$file_name."</h6>
												</a>";
								echo "</div></div></div></div>";
					}
					
					else 
						
						{echo"";}
					}
				}
		}
		$res9 = mysqli_query($con3,$sql33);
		$cou = mysqli_num_rows($res9);
		$a = $cou/5;
		$a = ceil($a);
		echo "<br>";echo "<br>";
		
			for($b=1;$b<=$a;$b++)
			{
				
				?><a href="user_event.php?page=<?php echo $b; ?>"style="color:#fff; size:10px; margin-bottom:5px;"class="btn><?php echo $b." "; ?></a> <?php
			}
		
		?>