<?php
	include('auth.php');
?>
	<?php
	include('inc/db2.php');

	$sql2 = "SELECT * FROM user WHERE user_id='".$_SESSION['user_id']."'";

	$res2 = mysqli_query($con2,$sql2);

?>	
<?php include 'user_header.php'; ?>

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
							<h1>Change Password</h1>
						</div>
						
						<div class="module-body">
							<div class="stream-composer media">
								<?php
include('user_changingpass.php');
?>
							</div>
							
								
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>			

				

<?php include 'user_footer.php'; ?>