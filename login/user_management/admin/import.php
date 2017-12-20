	<?php
		include('db_backup_library.php');
		$dbbackup = new db_backup;
		$dbbackup->connect("localhost","root","","testing");
		$dbbackup->backup();
		if($dbbackup->db_import("file/backup_2017-03-07.sql")){
			//echo "Database Successfully Imported";
	?>
	
		<script type="text/javascript">
		alert("Database Successfully Imported");
		window.location= "backup_&_restore.php";
	</script>
	
	<?php 
	}
	?>
	