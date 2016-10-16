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
    	  <ul class="product-categories color"><li class="cat-item cat-item-42"><a href="#">Dresses</a> <span class="count">(14)</span></li>
			<li class="cat-item cat-item-60"><a href="#">Glasses</a> <span class="count">(2)</span></li>
			<li class="cat-item cat-item-63"><a href="#">Gloves</a> <span class="count">(2)</span></li>
			<li class="cat-item cat-item-54"><a href="#">Jeans</a> <span class="count">(8)</span></li>
			<li class="cat-item cat-item-55"><a href="#">Shoes</a> <span class="count">(11)</span></li>
			<li class="cat-item cat-item-64"><a href="#">Shorts</a> <span class="count">(3)</span></li>
			<li class="cat-item cat-item-61"><a href="#">Skirts</a> <span class="count">(3)</span></li>
			<li class="cat-item cat-item-56"><a href="#">Sweaters</a> <span class="count">(6)</span></li>
			<li class="cat-item cat-item-57"><a href="#">T-Shirts</a> <span class="count">(13)</span></li>
			<li class="cat-item cat-item-58"><a href="#">Tops</a> <span class="count">(7)</span></li>
			<li class="cat-item cat-item-62"><a href="#">Watchers</a> <span class="count">(2)</span></li>
			<li class="cat-item cat-item-41"><a href="#">Women</a> <span class="count">(17)</span></li>
		 </ul>
		  <h3>Colors</h3>
    	  <ul class="product-categories color"><li class="cat-item cat-item-42"><a href="#">Green</a> <span class="count">(14)</span></li>
			<li class="cat-item cat-item-60"><a href="#">Blue</a> <span class="count">(2)</span></li>
			<li class="cat-item cat-item-63"><a href="#">Red</a> <span class="count">(2)</span></li>
			<li class="cat-item cat-item-54"><a href="#">Gray</a> <span class="count">(8)</span></li>
			<li class="cat-item cat-item-55"><a href="#">Green</a> <span class="count">(11)</span></li>
		  </ul>
		  <h3>Sizes</h3>
    	  <ul class="product-categories color"><li class="cat-item cat-item-42"><a href="#">L</a> <span class="count">(14)</span></li>
			<li class="cat-item cat-item-60"><a href="#">M</a> <span class="count">(2)</span></li>
			<li class="cat-item cat-item-63"><a href="#">S</a> <span class="count">(2)</span></li>
			<li class="cat-item cat-item-54"><a href="#">XL</a> <span class="count">(8)</span></li>
			<li class="cat-item cat-item-55"><a href="#">XS</a> <span class="count">(11)</span></li>
		  </ul>
		  <h3>Price</h3>
    	  <ul class="product-categories"><li class="cat-item cat-item-42"><a href="#">200$-300$</a> <span class="count">(14)</span></li>
			<li class="cat-item cat-item-60"><a href="#">300$-400$</a> <span class="count">(2)</span></li>
			<li class="cat-item cat-item-63"><a href="#">400$-500$</a> <span class="count">(2)</span></li>
			<li class="cat-item cat-item-54"><a href="#">500$-600$</a> <span class="count">(8)</span></li>
			<li class="cat-item cat-item-55"><a href="#">600$-700$</a> <span class="count">(11)</span></li>
		  </ul>
		</div>
    	<div class="col-md-8 mens_right">
    		<div class="dreamcrub">
			   	<ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="home">&nbsp;
                        Men / Women&nbsp;
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.html">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="mens-toolbar">
                 <div class="sort">
               	   <div class="sort-by">
		            <label>Sort By</label>
		            <select>
		                            <option value="">
		                    Position                </option>
		                            <option value="">
		                    Name                </option>
		                            <option value="">
		                    Price                </option>
		            </select>
		            <a href=""><img src="images/arrow2.gif" alt="" class="v-middle"></a>
                   </div>
    		     </div>
    	        <ul class="women_pagenation dc_paginationA dc_paginationA06">
			     <li><a href="#" class="previous">Page : </a></li>
			     <li class="active"><a href="#">1</a></li>
			     <li><a href="#">2</a></li>
		  	    </ul>
                <div class="clearfix"></div>		
		        </div>
    		<div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
					<div class="cbp-vm-options">
						<a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid" title="grid">Grid View</a>
						<a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list" title="list">List View</a>
					</div>
					<div class="pages">   
        	 <div class="limiter visible-desktop">
               <label>Show</label>
                  <select>
                            <option value="" selected="selected">
                    9                </option>
                            <option value="">
                    15                </option>
                            <option value="">
                    30                </option>
                  </select> per page        
               </div>
       	   </div>
					<div class="clearfix"></div>
					<ul>
					  <li class="simpleCart_shelfItem">
							<a class="cbp-vm-image" href="single.html">
							 <div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<div class="mask1"><img src="images/m4.jpg" alt="image" class="img-responsive zoom-img"></div>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                 </div>
					                 <div class="product_container">
									   <h4>Lorem 2015</h4>
									   <p>Dresses</p>
									   <div class="price mount item_price">$99.00</div>
									   <a class="button item_add cbp-vm-icon cbp-vm-add" href="#">Add to cart</a>
									 </div>		
								  </div>
			                     </div>
		                      </div>
		                    </a>
						</li>
						<li class="simpleCart_shelfItem">
							<a class="cbp-vm-image" href="single.html">
							  <div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<div class="mask1"><img src="images/m2.jpg" alt="image" class="img-responsive zoom-img"></div>
									 <div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									 <div class="product_container">
									   <h4>Lorem 2015</h4>
									   <p>Dresses</p>
									   <div class="price mount item_price">$99.00</div>
									   <a class="button item_add cbp-vm-icon cbp-vm-add" href="#">Add to cart</a>
									 </div>		
								  </div>
			                     </div>
		                      </div>
							 </a>
						</li>
						<li class="last simpleCart_shelfItem">
							<a class="cbp-vm-image" href="single.html">
								<div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<div class="mask1"><img src="images/m3.jpg" alt="image" class="img-responsive zoom-img"></div>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									<div class="product_container">
									   <h4>Lorem 2015</h4>
									   <p>Dresses</p>
									    <div class="price mount item_price">$99.00</div>
									    <a class="button item_add cbp-vm-icon cbp-vm-add" href="#">Add to cart</a>
									 </div>		
								  </div>
			                     </div>
		                      </div>
							</a>
						</li>
						<li class="simpleCart_shelfItem">
							<a class="cbp-vm-image" href="single.html">
								<div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<div class="mask1"><img src="images/m1.jpg" alt="image" class="img-responsive zoom-img"></div>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									<div class="product_container">
									   <h4>Lorem 2015</h4>
									   <p>Dresses</p>
									   <div class="price mount item_price">$99.00</div>
									    <a class="button item_add cbp-vm-icon cbp-vm-add" href="#">Add to cart</a>
									 </div>		
								  </div>
			                     </div>
		                      </div>
							</a>
						</li>
						<li class="simpleCart_shelfItem">
							<a class="cbp-vm-image" href="single.html">
								<div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<div class="mask1"><img src="images/m5.jpg" alt="image" class="img-responsive zoom-img"></div>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									<div class="product_container">
									   <h4>Lorem 2015</h4>
									   <p>Dresses</p>
									    <div class="price mount item_price">$99.00</div>
									    <a class="button item_add cbp-vm-icon cbp-vm-add" href="#">Add to cart</a>
									 </div>		
								  </div>
			                     </div>
		                      </div>
							</a>
						</li>
						<li class="last simpleCart_shelfItem">
							<a class="cbp-vm-image" href="single.html">
								<div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<div class="mask1"><img src="images/m6.jpg" alt="image" class="img-responsive zoom-img"></div>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									<div class="product_container">
									   <h4>Lorem 2015</h4>
									   <p>Dresses</p>
									    <div class="price mount item_price">$99.00</div>
									    <a class="button item_add cbp-vm-icon cbp-vm-add" href="#">Add to cart</a>
									 </div>		
								  </div>
			                     </div>
		                      </div>
							</a>
						</li>
					</ul>
				</div>
				<script src="js/cbpViewModeSwitch.js" type="text/javascript"></script>
                <script src="js/classie.js" type="text/javascript"></script>
    	</div>
    </div>
   </div>
   <div class="footer">
   	 <div class="container">
   	 	<div class="newsletter">
			<h3>Newsletter</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
			<form>
			  <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
			  <input type="submit" value="SUBSCRIBE">
			</form>
		</div>
   		<div class="cssmenu">
		   <ul>
			<li class="active"><a href="#">Privacy</a></li>
			<li><a href="#">Terms</a></li>
			<li><a href="#">Shop</a></li>
			<li><a href="#">About</a></li>
			<li><a href="contact.html">Contact</a></li>
		  </ul>
		</div>
		<ul class="social">
			<li><a href=""> <i class="instagram"> </i> </a></li>
			<li><a href=""><i class="fb"> </i> </a></li>
			<li><a href=""><i class="tw"> </i> </a></li>
	    </ul>
	    <div class="clearfix"></div>
	    <div class="copy">
           <p> &copy; 2015 Watches. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
	    </div>
   	</div>
   </div>
</body>
</html>		