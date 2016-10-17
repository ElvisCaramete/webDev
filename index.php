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
			<li class="active grid" ><a href="index.php?lang=<?php echo $lang['LANG']; ?>"><?php echo $lang['MENU_HOME']; ?></a>
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
				<li><a class="color3" href="login.php?lang=<?php echo $lang['LANG']; ?>"><?php echo $lang['LOGIN']; ?></a></li>
				<div class="clearfix"> </div>
			</ul>
			</div>
	        <div class="clearfix"> </div>
	        </div>
	    </div>
   </div>
   <div class="main">
    <div class="container">
    	<ul class="content-home">
           <li class="col-sm-4">
              <a class="item-link" title="">
                <div class="bannerBox">
                   <img src="images/w1.jpg" class="item-img" title="" alt="" width="100%" height="100%">
                   <div class="item-html">
                      <h3><?php echo $lang['MEN']; ?></h3>
                      <p><?php echo $lang['DESCRIPTION']; ?></p>
                      <button><?php echo $lang['SHOP']; ?></button>
                   </div>
                </div>
              </a>
           </li>
           <li class="col-sm-4">
              <a class="item-link" title="">
                <div class="bannerBox">
                   <img src="images/w3.jpg" class="item-img" title="" alt="" width="100%" height="100%">
                   <div class="item-html">
                      <h3><?php echo $lang['MEN']; ?></h3>
                      <p><?php echo $lang['DESCRIPTION']; ?></p>
                      <button><?php echo $lang['SHOP']; ?></button>
                   </div>
                </div>
              </a>
           </li>
           <li class="col-sm-4">
              <a class="item-link" title="">
                <div class="bannerBox">
                   <img src="images/w2.jpg" class="item-img" title="" alt="" width="100%" height="100%">
                   <div class="item-html">
                      <h3><?php echo $lang['WOMEN']; ?></h3>
                      <p><?php echo $lang['DESCRIPTION']; ?></p>
                      <button><?php echo $lang['SHOP']; ?></button>
                   </div>
                </div>
              </a>
           </li> 
           <div class="clearfix"> </div>         
       </ul>
    </div>
    <div class="middle_content">
    	<div class="container">
    		<h2><?php echo $lang['WELCOME']; ?></h2>
    		<p><?php echo $lang['DESC']; ?></p>
    	</div>
    </div>
   	<div class="content_middle_bottom">
   		<div class="header-left" id="home">
		      <section>
				<ul class="lb-album" >
					<li>
						<a href="#image-1">
							<img src="images/g1.jpg"  class="img-responsive" alt="image01"/>
							<span>Pocket watch</span>
						</a>
						<div class="lb-overlay" id="image-1">
							<a href="#page" class="lb-close">Close</a>
							<img src="images/g1.jpg"  class="img-responsive" alt="image01"/>
							<div>
								<h3>Pocket watch<span></span></h3>
								<p>Beautiful since 1950</p>
							</div>
						</div>
					</li>
					<li>
						<a href="#image-2">
							<img src="images/g2.jpg"  class="img-responsive" alt="image02"/>
							<span>Hand watch</span>
						</a>
						<div class="lb-overlay" id="image-2">
							<img src="images/g2.jpg"  class="img-responsive" alt="image02"/>
							<div>							
								<h3>Hand watch<span></span></h3>
								<p>Beautiful since 1950</p>
							</div>
							<a href="#page" class="lb-close">Close</a>
						</div>
					</li>
					<li>
						<a href="#image-3">
							<img src="images/g3.jpg"  class="img-responsive" alt="image03"/>
							<span>Hand watch</span>
						</a>
						<div class="lb-overlay" id="image-3">
							<img src="images/g3.jpg"  class="img-responsive" alt="image03"/>
							<div>							
								<h3>Hand watch<span></span></h3>
								<p>Beautiful since 1950</p>
							</div>
							<a href="#page" class="lb-close">Close</a>
						</div>
					</li>
					<li>
						<a href="#image-4">
							<img src="images/g4.jpg"  class="img-responsive" alt="image04"/>
							<span>Hand watch</span>
						</a>
						<div class="lb-overlay" id="image-4">
							<img src="images/g4.jpg"  class="img-responsive" alt="image04"/>
							<div>							
								<h3>Hand watch<span></span></h3>
								<p>Beautiful since 1950</p>
							</div>
							<a href="#page" class="lb-close">Close</a>
						</div>
					</li>
					<li>
						<a href="#image-5">
							<img src="images/g5.jpg"  class="img-responsive" alt="image05"/>
							<span>Hand watch</span>
						</a>
						<div class="lb-overlay" id="image-5">
							<img src="images/g5.jpg"  class="img-responsive" alt="image05"/>
							<div>							
								<h3>Hand watch<span></span></h3>
								<p>Beautiful since 1950</p>
							</div>
							<a href="#page" class="lb-close">Close</a>
						</div>
					</li>
					<li>
						<a href="#image-6">
							<img src="images/g6.jpg"  class="img-responsive" alt="image06"/>
							<span>Hand watch</span>
						</a>
						<div class="lb-overlay" id="image-6">
							<img src="images/g6.jpg"  class="img-responsive" alt="image06"/>
							<div>							
								<h3>Hand watch<span></span></h3>
								<p>Beautiful since 1950</p>
							</div>
							<a href="#page" class="lb-close">Close</a>
						</div>
					</li>
					<li>
						<a href="#image-7">
							<img src="images/g7.jpg"  class="img-responsive" alt="image07"/>
							<span>Hand watch</span>
						</a>
						<div class="lb-overlay" id="image-7">
							<img src="images/g7.jpg"  class="img-responsive" alt="image07"/>
							<div>							
								<h3>Hand watch<span></span></h3>
								<p>Beautiful since 1950</p>
							</div>
							<a href="#page" class="lb-close">Close</a>
						</div>
					</li>
					<li>
						<a href="#image-8">
							<img src="images/g8.jpg"  class="img-responsive" alt="image08"/>
							<span>Hand watch</span>
						</a>
						<div class="lb-overlay" id="image-8">
							<img src="images/g8.jpg"  class="img-responsive" alt="image08"/>
							<div>							
								<h3>Hand watch<span></span></h3>
								<p>Beautiful since 1950</p>
							</div>
							<a href="#page" class="lb-close">Close</a>
						</div>
					</li>
					<div class="clearfix"></div>
				</ul>
			</section>
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
