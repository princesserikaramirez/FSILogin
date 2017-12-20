<?php
			include('inc/db.php');
			
			if(isset($_GET['term'])){
				$term = $_GET['term'];
			}else{
				$term = '';
			}
		
			$sql = "SELECT * FROM documents WHERE name LIKE '%$term%' OR description LIKE '%$term%' ";
			
			
			
			if(isset($_POST['submit'])){
				
				if(isset($_POST['name'])){
					$term = $_POST['name'];
				}else{
					$term = '';
				}
				
				echo "<script type=\"text/javascript\">".
									"window.location.href = 'user_archive.php?term=$term';".
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
		
		
		if($file_page == 1){
			echo  "<br>" . $id  ,str_repeat('&nbsp;', 5), $name ."<br>". str_repeat('&nbsp;', 9), $description . "<br>". str_repeat('&nbsp;', 9), $date . "<br>";
		}
	}
	
	?>