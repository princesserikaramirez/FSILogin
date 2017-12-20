<?php
			include('inc/db.php');
			
			if(isset($_GET['term'])){
				$term = $_GET['term'];
			}else{
				$term = '';
			}
		
			$sql = "SELECT * FROM documents WHERE (name LIKE '%$term%' OR description LIKE '%$term%') ";
			
			
			
			if(isset($_POST['submit'])){
				
				if(isset($_POST['name'])){
					$term = $_POST['name'];
				}else{
					$term = '';
				}
				
				echo "<script type=\"text/javascript\">".
									"window.location.href = 'archive.php?term=$term';".
									"</script>";
				
			}
			
			if(isset($_POST['sorter'])){
				
				$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				$currentURL = parse_url($url, PHP_URL_QUERY);
				$sortby = '';
				
				if(isset($_POST['sortby'])){
					$sortby = $_POST['sortby'];
					
					if($sortby=='day'){
						$orderby = 'ORDER by DAY(date) asc';
					}else if($sortby=='week'){
						$orderby = 'AND YEARWEEK(DATE(`date`), 1) = YEARWEEK(CURDATE(), 1)';
					}else if($sortby=='month'){
						$orderby = 'ORDER by MONTH(date) asc';
					}else if($sortby =='year'){
						$orderby = 'ORDER by YEAR(date) asc';
					}else{
						$orderby = '';
					}
					
					$sql = $sql.$orderby;
					
				}
				
			}
			
			$res = mysqli_query($con,$sql);
		?>
		
		<?php
	
	while($row = mysqli_fetch_array($res)){
		
		$id     		=$row['id'];
		$name			=$row['name'];
		$description	=$row['description'];
		$date			=$row['date'];
		$path   		=$row['path'];
		$file_page		=$row['page'];
		$file_name			=$row['fileName'];
		
		
		
		if($file_page == 1 || $file_page == 2){
			echo "
				<div class='media stream'>
				<div class='stream-list'>
				<div class='media-body'>";
							
			echo  "<p align='right'>
				".substr($date, 0, 10) ." <br></p><p style='font-size:25px'>" ,"<strong>"
				,"<div  style='width:inherit;height:inherit;border:1px solid #E5E5E5; margin: 0 px 0px -10px; padding: 10px;'></strong></p><strong>Title:  </strong>"
				.$name ."<p></br><strong>Description:</strong></p>","<div class='stream-text'>"
				. $description . "</div></br>
								<div class='stream-options'><center>
												<a href='download_file.php?dow=$path' class='btn btn-small' >
													<i class='icon-download shaded'></i>
													<h6 class='stream-author'>".$file_name."</h6>
												</a></center>";
								echo "</div></div></div></div></div>";
			
			}
	}
	
	?>