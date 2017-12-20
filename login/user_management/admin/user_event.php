<?php include 'user_header.php'; ?>

<div class="wrapper">
	<div class="container">
		<div class="row">
		<?php include 'user_side.php'; ?>
			<div class="span9">
				<div class="content">
				
					<div class="module">
						<div class="module-head">
							<h4>News Feed</h4>
						</div>
						
						<div class="module-body">
							<div class="stream-composer media">
								<?php include('user_upload.php');?>				
							</div>
							
							<?php include('user_eventdata.php');?>		
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'user_footer.php'; ?> 