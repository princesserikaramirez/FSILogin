<?php include 'header.php'; ?>

<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<div class="wrapper">
	<div class="container">
		<div class="row">
		<?php include 'side.php'; ?>
			<div class="span9">
				<div class="content">
				
					<div class="module">
						<div class="module-head">
							<h4>Pending Requests</h4>
						</div>
						
						<div class="module-body">
						
							
							<?php include('pendingdata.php');?>		
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>


<?php include 'footer.php'; ?>