<?php include 'user_header.php'; ?>
<?php include 'auth.php'; ?>




<div class="wrapper">
	<div class="container">
		<div class="row">
		
			<div class="span3">
				<?php include 'user_side.php'; ?>
			</div>
			<div class="span7">
				<div class="content">
				
					<div class="module">
						<div class="module-head">
							<h1>Events Feed</h1>
						</div>
						
						<div class="module-body">
							<div class="stream-composer media">
									<?php include('user_eventdata.php');?>			
							</div>
							
								
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
	
			

<?php include 'footer.php'; ?>