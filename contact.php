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
	<body>		
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
					<a href="contact.php?lang=en"><img src="images/en.png" /></a>
					<a href="contact.php?lang=ro"><img src="images/ro.png" /></a>
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
			<li><a href="index.php?lang=<?php echo $lang['LANG']; ?>">Home</a>
			</li>
			<li><a class="color4" href="#">Products</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Men</h4>
								<ul>
									<li><a href="men.html">Men Watches</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Women</h4>
								<ul>
									<li><a href="men.html">Women Watches</a></li>
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
				<li class="active grid" ><a class="color10" href="contact.php?lang=<?php echo $lang['LANG']; ?>">Contact Us</a></li>
				<li><a class="color3" href="index.html?lang=<?php echo $lang['LANG']; ?>">Log In</a></li>
				<div class="clearfix"> </div>
			</ul>
			</div>
	        <div class="clearfix"> </div>
	        </div>
	    </div>
   </div>
   <div class="men">
   	 <div class="container">
   	  <div class="grid_1">
	   	  <h1>Contact Info</h1>
	   	  <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum</p>
      </div>
      <div class="grid_4">
      <div class="grid_2 preffix_1">
	      <ul class="iphone">
	      	<i class="phone"> </i>
	      	<li class="phone_desc">Phone : +1 800 245 2365 </li>
	      	<div class="clearfix"> </div>
	      </ul>
	      <ul class="iphone">
	      	<i class="flag"> </i>
	        <li class="phone_desc">Website : <a href="mailto:mail@demolink.org">www.demolink.com</a></li>
	      	<div class="clearfix"> </div>
	      </ul>
	  </div>
	  <div class="grid_3">
	      <ul class="iphone">
	      	<i class="msg"> </i>
	        <li class="phone_desc">Email : <a href="mailto:mail@demolink.org">mail(at)watches.com</a> </li>
	      	<div class="clearfix"> </div>
	      </ul>
	      <ul class="iphone">
	      	<i class="home"> </i>
	        <li class="phone_desc">Address : vel illum dolore eu feugiat nulla </li>
	      	<div class="clearfix"> </div>
	      </ul>
	  </div>
	  <div class="clearfix"> </div>
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