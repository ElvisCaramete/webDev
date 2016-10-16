<?php
include_once 'common.php';
?>

<html>
   <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<link href="css/style.css" rel='stylesheet' type='text/css' />

		<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>

		<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="js/megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
		<script src="js/jquery.easydropdown.js"></script>
		<script src="js/simpleCart.min.js"> </script>
		<title><?php echo $lang['PAGE_TITLE']; ?></title>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
    </head>
	<div class="banner">
   	  <div class="container">
   	  	<div class="header_top">
           <div class="header_top_right">
			 <ul class="header_user_info">
			  <a class="login" href="login.php">
				<i class="user"> </i> 
				<li class="user_desc">My Account</li>
			  </a>
		     </ul>
			  <div id="languages">
					<a href="index.php?lang=en"><img src="images/en.png" /></a>
					<a href="index.php?lang=ro"><img src="images/ro.png" /></a>
			  </div>
			 </div>
		     <div class="clearfix"> </div>
	  </div>
	  <div class="header_bottom">
	   <div class="logo">
		  <h1><a href="index.php?lang=<?php echo $lang['LANG']; ?>"><span class="m_1"><?php echo $lang['W']; ?></span><?php echo $lang['LOGO']; ?></a></h1>
	   </div>
   	   <div class="menu">
	     <ul class="megamenu skyblue">
			<li class="active grid"><a href="index.php?lang=<?php echo $lang['LANG']; ?>">Home</a>
			</li>
			<li><a class="color4" href="men.php">Products</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Men</h4>
								<ul>
									<li><a href="men.php">Men Watches</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Women</h4>
								<ul>
									<li><a href="men.php">Women Watches</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col2">
							<div class="h_nav">
								<h4>Trends</h4>
								<ul>
										<div class="p_left">
										  <img src="images/p2.jpg" class="img-responsive" alt=""/>
										</div>
										<div class="p_right">
											<h4><a href="#">MECHANICAL FOSSIL</a></h4>
											<span class="item-cat"><small><a href="#">Price</a></small></span>
											<span class="price">29.99 $</span>
										</div>
										<div class="clearfix"> </div>
									</li>
								</ul>	
							</div>												
						</div>
					  </div>
					</div>
				</li>				
				<li><a class="color10" href="contact.php?lang=<?php echo $lang['LANG']; ?>">Contact Us</a></li>
				<li><a class="color3" href="index.html?lang=<?php echo $lang['LANG']; ?>">Log In</a></li>
				<div class="clearfix"> </div>
			</ul>
			</div>
	        <div class="clearfix"> </div>
	        </div>
	    </div>
	  </div>
   </div>
   <div class="men">
    <div class="container">
    	<div class="col-md-4 sidebar_men">
    	  <h3>Categories</h3>
			<li class="cat-item cat-item-62"><a href="#">Man Watches</a> <span class="count">(0)</span></li>    <!--tre modificat!-->
			<li class="cat-item cat-item-41"><a href="#">Ladies Watches</a> <span class="count">(0)</span></li>   <!--tre modificat!-->
		</div>
    	<div class="col-md-8 mens_right">
    		<div class="dreamcrub">
			   	<ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.php" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="home">&nbsp;
                        Men / Women&nbsp;
                    </li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="mens-toolbar">
    	        <ul class="women_pagenation dc_paginationA dc_paginationA06">		
		        </div>
    </div>
   </div>
   <div class="footer">
   	 <div class="container">
	    <div class="clearfix"></div>
	    <div class="copy">
           <p> &copy; 2016 Watches. All Rights Reserved | Design by <a href="index.php?lang=<?php echo $lang['LANG']; ?>" target="_blank">Elvis Caramete & Catalin Boie</a></p>
	    </div>
   	</div>
   </div>
</body>
</html>
 	