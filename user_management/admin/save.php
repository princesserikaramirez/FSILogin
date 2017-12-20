	<?php
		include('db_backup_library.php');
		$dbbackup = new db_backup;
		$dbbackup->connect("localhost","root","","dms-fsi");
		$dbbackup->backup();
		if($dbbackup->save("file/")){
			//echo "Backup Saved Successfully";
		
	?>
	
	<script type="text/javascript">
		alert("Backup Saved Successfully");
		window.location= "backup_&_restore.php";
	</script>
	
	<?php 
	}
	?>
	