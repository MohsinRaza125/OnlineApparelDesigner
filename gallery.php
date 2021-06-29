<?php
   include('session.php');
   if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<!DOCTYPE html>
<html lang="en-US">
<head>

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
					<script type="text/javascript">document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
			<title>User Gallery</title>
		<!-- Headr Files -->	
		<?php include 'include/header-files.php';?>
		</head>
<body class="home page page-id-19 page-template page-template-page-templates page-template-page-template page-template-page-templatespage-template-php mmm mega_main_menu-2-1-2 crown-animate-scroll wpb-js-composer js-comp-ver-4.12.1 vc_responsive">
<div class="main-wrapper ">
 

	<!-- 	headerphp -->
<?php 
 // If session is strat then load header.php 
    if(!isset($_SESSION)) 
    {
        include 'include/header.php';
    }
	else
	{  // if session is destroy then load header1.php
	include 'include/header1.php';
	}
?>
<!-- 	headerphp -->
		
 
		
<!-- site content starts -->
<div  style="margin: 0px 10%;"> 
<iframe src="/3deditor/index.php" width="100%"  height="900px" frameborder="0"    scrolling=yes  > </iframe>
 </div>


<!-- site content ends  -->

			

			 <?php include 'include/footer.php';?>
</body>

 
</html>
 