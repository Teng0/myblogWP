<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>rippedblue - a web template</title>

<?php wp_head()?>
</head>
<body>
<div id="wrap">
	<div id="header">			
		<!-- page header - use <span></span> to colour text grey, default color blue -->
		<h1><a href="#">ripped<span>blue</span></a></h1>
	
		<!-- header search form -->
		<div class="search-form">
		<?php echo get_search_form()  ?>
		</div>
		
		<div class="clear"></div>
	</div>

	<div id="navigation">
		<div class="inner-navigation">
			<?php wp_nav_menu( array(
  			  'location' => 'primary'
			) );?>
		</div>
	</div>
	<div id="page-title">