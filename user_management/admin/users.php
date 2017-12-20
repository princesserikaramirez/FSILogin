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
							<h1>Users</h1>
						</div>
						
						<div class="module-body">
							<div class="stream-composer media">
								<div class="row-fluid">
                                <div class="span12">
								<form  class="navbar-search pull-right input-append" method="post" action="users.php" id="searchform"> 
									<input type="text" class="span2" name="name">
									<button class="btn"  type="submit" name="submit" value="Search">
										<i class="icon-search"></i>
									</button>
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
</div>
 
<?php include 'footer.php'; ?>