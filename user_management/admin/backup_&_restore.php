<?php include 'header.php'; ?>
<div class="wrapper">
	<div class="container">
		<div class="row">
		
			<div class="span3">
				<?php include 'side.php'; ?>
			</div>
			<div class="span7">
				<div class="content">
				
					<div class="module">
						<div class="module-head">
							<h1>Backup and Restore</h1>
						</div>
						
						<div class="module-body">
							<div class="stream-composer media">
							</br></br>
									
<div class="btn-box-row row-fluid">
								<a href="<?php echo "save.php" ?>" class="btn-box big span4" name="submit" value="BACKUP" >
									<i class="icon-share"></i>
									<b>Backup</b>
								</a>
								<a href="<?php echo "download.php" ?>"class="btn-box big span4" name="submit" value="DOWNLOAD">
									<i class="icon-download"></i>
									<b>Download</b>
								</a>
								<a href="<?php echo "import.php" ?>"class="btn-box big span4" name="submit" value="IMPORT">
									<i class="icon-file"></i>
									<b>Import</b>
								</a>
							</div>
							</div>
							
								
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
							
<?php include 'footer.php'; ?>