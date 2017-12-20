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
							<h1>Home Feed</h1>
						</div>
						
						<div class="module-body">
							<div class="stream-composer media">
									<?php include('homedata.php');?>			
							</div>
							
								
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
				

<?php include 'footer.php'; ?>