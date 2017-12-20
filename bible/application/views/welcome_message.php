<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Jesus People Church | <?php echo $ver?> </title>
	
	
	<link href="<?php echo $assets_url;?>css/jquery-ui-1.9.2.custom.css" rel="stylesheet" type="text/css" charset="utf-8" />
	<link href="<?php echo $assets_url;?>css/jgrowl.css" rel="stylesheet" type="text/css" charset="utf-8" />

	
	<!--JAVASCRIPTS OUTFILE -->
	<script language="javascript" type="text/javascript" src="<?php echo $assets_url;?>jquery/jquery-1.8.3.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo $assets_url;?>jquery/jquery-ui-1.9.2.custom.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo $assets_url;?>jquery/jGrowl.js"></script>
	
	<script language="javascript" type="text/javascript" >
	

$(document).ready(function() {
	
	$('code').fadeIn('slow');
	//$.jGrowl('<?php echo $book_title?>');
	/*
	$(document).keyup(function(e){
	   if(e.which==122){
	       e.preventDefault();//kill anything that browser may have assigned to it by default
	       //do what ever you wish here :) 
	       alert('F11 pressed');
	       return false;
	   }
	});
	*/
	$("#book").click(function() 
	{
		
		$("#book_keyword").focus();
		
		var book = $("#book_id").val();
		var book_name = $("#book_name").val();
		
		var chapter = $("#chapter").val();
		var verse_from = $("#verse_from").val();
		var verse_to = $("#verse_to").val();
		
		$( "#select_book" ).dialog({
				
			width: 390,
			modal: true,
			position: 'right top',
			resizable: false,
			buttons: {
				'Go to verse': function() {
					
					var bookx = $("#book_keyword").val();
					
					if(bookx == ''){
						var bookx = '<?php echo $book_name;?>';
					}
					
					var chapterx = $("#chapter").val();
					var verse_fromx = $("#verse_from").val();
					var verse_tox = $("#verse_to").val();
					
					window.location.href = "http://localhost/bible/index.php/welcome/index/<?php echo $lang?>/"+bookx+"/"+chapterx+"/"+verse_fromx+"/"+verse_tox;
					$(this).dialog('close');
				}
			}
				
		});	
	})
	;
	
	$("#logs").click(function() 
	{
		
		$.post("http://localhost/bible/index.php/welcome/verses_history",
		{
		},
		function(data){
			
			$("#verses_history").html(data.output);
				
		},'json');
		
		$( "#verses_history" ).dialog({
				
			width: 390,
			modal: true,
			position: 'top',
			resizable: false,
			buttons: {
				'Close': function() {
					$(this).dialog('close');
				}
			}
				
		});	
	})
	;
	
	$("#save_verse").click(function() 
	{
		var book = $("#book_id").val();
		var lang = '<?php echo $lang?>';
		var chapter = $("#chapter").val();
		var verse_from = $("#verse_from").val();
		var verse_to = $("#verse_to").val();
		
		$.post("http://localhost/bible/index.php/welcome/save_verse",
		{
			book:book,
			lang:lang,
			chapter:chapter,
			verse_from:verse_from,
			verse_to:verse_to,
		},
		function(data){
			
			if(data.output == 1){
				$.jGrowl('Successfully Saved!');
			}else{
				$.jGrowl('This verse was already saved!');
			}
			
		},'json');
		
		
	})
	;
	
		var availableTags = [
							
		<?php
				
		 $sqlx = "SELECT * 
		 		  FROM $table 
		 		  WHERE book = 0 
		 		  AND chapter = 10";
		 $queryx = mysql_query($sqlx);
		 while($rowx = mysql_fetch_array($queryx)){
			
					echo '"'.$rowx['BIBLETEXT'].'",';
		 }
		?>
			""	
			];
			$( "#book_keyword" ).autocomplete({
				source: availableTags,
				
			});



});
</script>
	
	
	
	

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: darkgray;
		margin-top: 15px;
		margin-left: 0px;
		margin-right:0px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
		
		
	}
	
	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		
		font-family: Helvetica;
		color: lightyellow;
		background-color: #E17009;
		border: 1px solid #D0D0D0;
		font-size: 50px;
		font-weight: bold;
		margin: 0 0 0 0;
		padding: 30px;
	}
		
	code {
		/*font-family: Consolas, Monaco, Courier New, Courier, monospace;*/
		font-family: Helvetica;
		font-size: 46px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 10px 10px 10px 10px;
		padding: 15px;
		line-height:1.3em;
		
	}
	
	code:hover {
		
		font-family: Helvetica;
		font-size: 46px;
		background-color: #2E6E9E;
		border: 1px solid #D0D0D0;
		color: white;
		display: block;
		margin: 10px 10px 10px 10px;
		padding: 15px;
		line-height:1.3em;
		cursor:pointer;
	}

	#body{
		
		width : auto; 
		height : 435px; 
		overflow : auto;
		margin-bottom:-30px
		
	}
	
	p.footer{
		text-align: right;
		font-size: 15px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 30px 0 0 0;
		color: lightyellow;
		background-color: #E17009;
		border: 1px solid #D0D0D0;
	}
	
	#container{
		background-color: orange;
		margin: 2px;
		border: 1px solid #D0D0D0;
		/*-webkit-box-shadow: 0 0 8px #D0D0D0;*/
		
		-webkit-box-shadow: 0 0 8px #D0D0D0;
		-moz-box-shadow: 0 0 8px #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
	}
	
	#verse{
		font-size:35px;
		font-weight:bold;
		float:left;
		margin-top:-10px;
	}
	
	#book{
		cursor:pointer;
	}
	
	</style>
	
	<script>
	$(function() {
		$( "#menu" ).menu();
	});
	$(function() {
		$( "#ver" ).buttonset();
	});
	$(function() {
		$( "button:first" ).button({
			icons: {
				primary: "ui-icon-arrowreturnthick-1-s"
			},
		}).next().button({
			icons: {
				primary: "ui-icon-disk"
			}
		}).next().button({
			icons: {
				primary: "ui-icon-script",
			}
		});
	});
	</script>
	<style>
	#tools { float:left; margin-left:11px; margin-top:-3px}
	
	#ver{
		float:right; margin-right:15px; margin-top:-3px;
	}
	</style>
</head>
<body>
<div id="tools" style="font-size:8px">	
<button id="book">Change Verse</button>
<button id="save_verse">Save this Verse</button>
<button id="logs">Verses History</button>
</div>	

	<div id="ver" style="font-size:8px">
<input type="radio" id="ver1" name="ver" value="tag" <? if($lang=='tag') echo 'checked'; ?> onclick=" window.location.href = 'http://localhost/bible/index.php/welcome/index/tag/<?php echo $book_name?>/<?php echo $chapter?>/<?php echo $verse_from?>/<?php echo $verse_to?>/<?php echo $book?>'" > <label for="ver1">Tagalog</label>
<input type="radio" id="ver2" name="ver" value="tpv" <? if($lang=='tpv') echo 'checked'; ?> onclick=" window.location.href = 'http://localhost/bible/index.php/welcome/index/tpv/<?php echo $book_name?>/<?php echo $chapter?>/<?php echo $verse_from?>/<?php echo $verse_to?>/<?php echo $book?>'" > <label for="ver2">Bagong Salin</label>
<input type="radio" id="ver3" name="ver" value="eng" <? if($lang=='eng') echo 'checked'; ?> onclick=" window.location.href = 'http://localhost/bible/index.php/welcome/index/eng/<?php echo $book_name?>/<?php echo $chapter?>/<?php echo $verse_from?>/<?php echo $verse_to?>/<?php echo $book?>'" > <label for="ver3">English</label>
<input type="radio" id="ver4" name="ver" value="tpv" <? if($lang=='psv') echo 'checked'; ?> onclick=" window.location.href = 'http://localhost/bible/index.php/welcome/index/psv/<?php echo $book_name?>/<?php echo $chapter?>/<?php echo $verse_from?>/<?php echo $verse_to?>/<?php echo $book?>'" > <label for="ver4">Pangasinan</label>
<input type="radio" id="ver5" name="ver" value="tpv" <? if($lang=='bicol') echo 'checked'; ?> onclick=" window.location.href = 'http://localhost/bible/index.php/welcome/index/bicol/<?php echo $book_name?>/<?php echo $chapter?>/<?php echo $verse_from?>/<?php echo $verse_to?>/<?php echo $book?>'" > <label for="ver5">Bicol</label>
<input type="radio" id="ver6" name="ver" value="tpv" <? if($lang=='pnt') echo 'checked'; ?> onclick=" window.location.href = 'http://localhost/bible/index.php/welcome/index/pnt/<?php echo $book_name?>/<?php echo $chapter?>/<?php echo $verse_from?>/<?php echo $verse_to?>/<?php echo $book?>'" > <label for="ver6">Pampanga</label>
<input type="radio" id="ver7" name="ver" value="ilokano" <? if($lang=='ilokano') echo 'checked'; ?> onclick=" window.location.href = 'http://localhost/bible/index.php/welcome/index/ilokano/<?php echo $book_name?>/<?php echo $chapter?>/<?php echo $verse_from?>/<?php echo $verse_to?>/<?php echo $book?>'" > <label for="ver7">Ilocano</label>
</div>
<br>
<div id="container">
<div id="title_header">
	<h1><?php echo $book_title?></h1>
</div>

<div id="body">
		<?php foreach($query->result() as $row): ?>
		
		<code ><div id="verse"><?php echo $row->VERSE?></div>&nbsp;<?php echo $row->BIBLETEXT?></code>
		
		<?php endforeach?>
	</div>

	<p class="footer">  <strong>JESUS PEOPLE CHURCH </strong> - <?php echo $ver?> - <?php echo $book_title?> &nbsp;
	&nbsp;
	</p>
</div>

</body>
</html>



<div id="select_book"  title="Change Verse" style="display:none;">

 	  <div class="ui-corner-all" id="con">
             
 	  		<input type="hidden" id="book_id" value="<?php echo $book?>"/>
 	  		
 	  		<input type="hidden" id="book_name" value="<?php echo $book_name?>"/>
 	  
            <input type="text" title="Anong libro?" id="book_keyword"  placeholder="<?php echo $book_name?>" class="ui-corner-all small" style="height:30px; border:4px solid #999; padding:5px; margin-top:5x; width:150px;font-size:20px; font-weight:normal">
            &nbsp;
            <input type="text" title="Kapitulo?" id="chapter" value="<?php echo $chapter?>" class="ui-corner-all small"  placeholder="0" style="text-align:center;height:30px; border:4px solid #999; padding:5px; margin-top:5x; width:30px;font-size:20px;">
            	
             <x style="height:30px; margin-top:5x; width:30px;font-size:20px; font-weight:normal">:</x>
            	
            <input type="text" id="verse_from" onchange="var to = $('#verse_from').val(); $('#verse_to').val(to);" value="<?php echo $verse_from?>" class="ui-corner-all small"  placeholder="0" style="text-align:center;height:30px; border:4px solid #999; padding:5px; margin-top:5x; width:30px;font-size:20px;">
            	
             <x style="text-align:center;height:30px; margin-top:5x; width:30px;font-size:20px;">-</x>
             
             <input type="text" id="verse_to" value="<?php echo $verse_to?>" class="ui-corner-all small"  placeholder="0" style="text-align:center;height:30px; border:4px solid #999; padding:5px; margin-top:5x; width:30px;font-size:20px;">
				
				
      </div>
 </div>

<div id="verses_history"  title="Verses History" style="display:none;">
	

</div>


