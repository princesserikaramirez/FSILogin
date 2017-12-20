<?php include 'header.php'; ?>


<div class="wrapper">
	<div class="container">
		<div class="row">
		<?php include 'side.php'; ?>
			<div class="span9">
				<div class="content">
				
					<div class="module">
						<div class="module-head">
							<h4>Archives</h4>
						</div>
						
						<div class="module-body">
							<div class="stream-composer media">
								<form  method="post" action="archive.php"  id="searchform"> 
									<input  type="text" name="name"> 
									<input  type="submit" name="submit" value="Search"> 
								</form>
							
							</div>
							
							<form id="id" type="date" method="post" action="archive.php">
							Sort By :
						
								<select name="sortby"/>
									<option disabled selected value="">--- Select ---</option>
									<option value="day">--- Day ---</option>
									<option value="month">--- Month ---</option>
									<option value="year">--- Year ---</option>
							
								</select>
								<input type="submit" name="sorter" />
							</form>

							<?php include('archivedata.php');?>		
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>