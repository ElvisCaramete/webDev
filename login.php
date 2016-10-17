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
				<li class="user_desc"><?php echo $lang['ACCOUNT']; ?></li>
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
			<li><a href="index.php?lang=<?php echo $lang['LANG']; ?>"><?php echo $lang['MENU_HOME']; ?></a>
			</li>
			<li><a class="color4" href="#"><?php echo $lang['MENU_PRODUCTS']; ?></a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4><?php echo $lang['MEN']; ?></h4>
								<ul>
									<li><a href="men.html"><?php echo $lang['MEN_WATCHES']; ?></a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4><?php echo $lang['WOMEN']; ?></h4>
								<ul>
									<li><a href="women.html"><?php echo $lang['WOMEN_WATCHES']; ?></a></li>
								</ul>	
							</div>							
						</div>
						<div class="col2">
							<div class="h_nav">
								<h4><?php echo $lang['TRENDS']; ?></h4>
								<ul>
										<div class="p_left">
										  <img src="images/p2.jpg" class="img-responsive" alt=""/>
										</div>
										<div class="p_right">
											<h4><a href="#">MECHANICAL FOSSIL</a></h4>
											<span class="item-cat"><small><a href="#"><?php echo $lang['PRICE']; ?></a></small></span>
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
				<li><a class="color10" href="contact.php?lang=<?php echo $lang['LANG']; ?>"><?php echo $lang['MENU_CONTACT_US']; ?></a></li>
				<li class="active grid" ><a class="color3" href="login.php?lang=<?php echo $lang['LANG']; ?>"><?php echo $lang['LOGIN']; ?></a></li>
				<div class="clearfix"> </div>
			</ul>
			</div>
	        <div class="clearfix"> </div>
	        </div>
	    </div>
   </div>
   <div class="account-in">
   	 <div class="container">
   	   <h3>Account</h3>
		<div class="col-md-7 account-top">
		  <form action="checklogin.php" method="POST" >
			<div> 	
				<span>Username*</span>
				<input type="text" name="username" required="required"> 
			</div>
			<div> 
				<span class="pass">Password*</span>
				<input type="password" name="password" required="required">
			</div>				
				<input type="submit" value="Login"> 
		   </form>
		</div>
		<div class="col-md-5 left-account ">
			<a href="register.php" class="create">Create an account</a>
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