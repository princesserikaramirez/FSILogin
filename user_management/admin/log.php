<?php include 'header.php'; ?>

<?php
//include auth.php file on all secure pages
include("auth.php");
?>


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
							<h1>Logs</h1>
						</div>
						
						<div class="module-body">
							<div class="stream-composer media"></br>
								<?php include('logdata.php');?>	
							</div>
							
								
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

								


<?php include 'footer.php'; ?>