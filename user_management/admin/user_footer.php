<footer class="navbar navbar-default">
	<div class="navbar-fixed-bottom navbar-inner">
		<div class="container">
			<div class="row" align="center">
				<?php 
					$cp = "Copyright"; 
					$descfoot = "This is a document browser and announcement viewer for FSI employee.";
					$taon = date('Y');
				?>       
				<address style="color:#fff; padding-top:5px;">
					<!--Put an address element in the footer and you're indicating that 
					the contact info within the element is for the owner of the website 
					rather than the author of the article.-->
					<?php echo $descfoot ?><p><?php echo "$cp &copy $taon" ?></p>
				</address>
            </div>
		</div>		
					
    </footer>
</body>
</html>
