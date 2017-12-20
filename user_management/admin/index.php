<?php
include('inc/db.php');

$sql = "SELECT * FROM documents";

$res = mysqli_query($con,$sql);



?>



<html>
<head>
	<title>Documents</title>
</head>
<body>

	<a href="upload.php">Add new document</a><br><br>
	
		<h1>Add new document</h1><br>

	<?php
	

	while($row = mysqli_fetch_array($res)){
		
		$id     		=$row['id'];
		$name			=$row['name'];
		$description	=$row['description'];
		$path   		=$row['path'];
		
		echo $id. "<br>" . $name ."<br>". $description . "<br><a href='download.php?dow=$path'>Download</a><br><br>";
	}
	
	
	?>
</body>
</html>