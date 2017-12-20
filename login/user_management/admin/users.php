<?php include 'header.php'; ?>



<div class="wrapper">
	<div class="container">
		<div class="row">
		<?php include 'side.php'; ?>
			<div class="span9">
				<div class="content">
				
					<div class="module">
						<div class="module-head">
							<h4>Users</h4>
						</div>
						
						<div class="module-body">
                            <div class="row-fluid">
                                <div class="span6">
							<form  method="post" action="users.php"  id="searchform"> 
									<input  type="text" name="name"> 
									<input  type="submit" name="submit" value="Search"> 
								</form>
									<?php include('userdata.php');?>		
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