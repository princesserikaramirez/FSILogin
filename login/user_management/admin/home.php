<?php include 'header.php'; ?>



<div class="wrapper">
	<div class="container">
		<div class="row">
		<?php include 'side.php'; ?>
			
				<div class="content">
				
					<div class="module">
						<div class="module-head">
							<h2>Home</h2>
						</div>
						
						<div class="module-body">
							<h4> News Feed </h4>
							<div class="media stream">
									<?php include('homedata.php');?>
								
							</div>
						</div>
					</div>
					
				</div>
			
		</div>
	</div>
</div>
				

<?php include 'footer.php'; ?>