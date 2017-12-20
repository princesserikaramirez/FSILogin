<?php include 'header.php'; ?>



<div class="wrapper">
	<div class="container">
		<div class="row">
		<?php include 'side.php'; ?>
			<div class="span9">
				<div class="content">
				
					<div class="module">
						<div class="module-head">
							<h4>DATABASE</h4>
						</div>
						
							<div class="btn-box-row row-fluid">
								<a href="<?php echo "save.php" ?>" class="btn-box big span4" name="submit" value="BACKUP" >
									<i class="icon-adjust"></i>
									<b>Backup</b>
								</a>
								<a href="<?php echo "download.php" ?>"class="btn-box big span4" name="submit" value="DOWNLOAD">
									<i class="icon-briefcase"></i>
									<b>Download</b>
								</a>
								<a href="<?php echo "import.php" ?>"class="btn-box big span4" name="submit" value="IMPORT">
									<i class="icon-gift"></i>
									<b>Import</b>
								</a>
							</div>
							
	
	
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

</header>

<?php include 'footer.php'; ?>