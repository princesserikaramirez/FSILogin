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
							<h1>Archive</h1>
						</div>
						
						<div class="module-body">
							<div class="stream-composer media">
								<form  class="navbar-search pull-right input-append" method="post" action="user_archive.php"  id="searchform"> 
								
						<input type="text" class="span2" name="name">
						<button class="btn"  type="submit" name="submit" value="Search">
							<i class="icon-search"></i>
						</button>
				
					
								</form>
							
							</div>
							</br>
							<form id="id" type="date" method="post" action="user_archive.php">
							Sort By :
						
								<select class="dropdown-toggle btnn span2" name="sortby"/>
									<option disabled selected value="">--- Select ---</option>
									<option value="day">--- Day ---</option>
									<option value="week">--- Week ---</option>
									<option value="month">--- Month ---</option>
									<option value="year">--- Year ---</option>
							
								</select></br>
								<button class="btn"  type="submit" name="sorter">
							<i class="icon-filter"></i>Sort it!
						</button>
								
							</form>

							<?php include('user_archivedata.php');?>		
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'user_footer.php'; ?>