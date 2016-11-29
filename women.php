<?php
include_once 'common.php';
?>
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
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
			<div class="header_top_left">
	  	      <div class="box_11"><a href="checkout.php">
		      			  <?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
	$items = 0;
?>	
			  <?php		
    foreach ($_SESSION["cart_item"] as $item){
		?>
				<?php
        $item_total += ($item["price"]*$item["quantity"]);
		$items += $item["quantity"];
		}
		?>
		      <h4><p>Cart: <?php echo "&euro;".$item_total; ?> (<?php echo $items; ?> items )</p><img src="images/bag.png" alt=""/><div class="clearfix"> </div></h4>
			    <?php
}
?>
		      </a></div>
	          <p class="empty"><a href="checkout.php?action=empty" class="simpleCart_empty">Empty Cart</a></p>
	          <div class="clearfix"> </div>
	       </div>
           <div class="header_top_right">
			 <div class="lang_list">
				<select tabindex="4" class="dropdown">
					<option value="" class="label" value="">&euro; Euro</option>
				</select>
			 </div>
<?php
if(isset($_SESSION["user"])){
?>	
			 <ul class="header_user_info">
			  <a class="login">
				<i class="user"> </i> 
				<span style="text-transform: uppercase"><?php if($_SESSION['user']){ echo $_SESSION['user'];} ?></span>
				<a href="adminpannel.php?lang=<?php echo $lang['LANG']; ?>"><?php if($_SESSION['user']=="admin"){ echo "AdminPannel";} ?></a>
				<ul><a href="logout.php">&nbsp;LogOut</a></ul>
			  </a>
		     </ul>
<?php
}
else
{
?>
			<ul class="header_user_info">
			  <a class="login" href="login.php">
				<i class="user"> </i> 
				<li class="user_desc"><?php echo "My Account" ?></li>
			  </a>
		     </ul>
<?php
}
?>
			  <div id="languages">
					<a href="index.php?lang=en"><img src="images/en.png" /></a>
					<a href="index.php?lang=ro"><img src="images/ro.png" /></a>
			  </div>
			 </div>
			 <script src="js/classie1.js"></script>
		            <div class="clearfix"> </div>
		     <div class="clearfix"> </div>
	  </div>
	  <div class="header_bottom">
	   <div class="logo">
		  <h1><a href="index.php?lang=<?php echo $lang['LANG']; ?>"><span class="m_1"><?php echo $lang['W']; ?></span><?php echo $lang['LOGO']; ?></a></h1>
	   </div>
   	   <div class="menu">
	     <ul class="megamenu skyblue">
			<li class="active grid"><a href="index.php?lang=<?php echo $lang['LANG']; ?>"><?php echo $lang['MENU_HOME']; ?></a>
			</li>
			<li><a class="color4" href="#"><?php echo $lang['MENU_PRODUCTS']; ?></a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Men</h4>
								<ul>
									<li><a href="men.php?lang=<?php echo $lang['LANG']; ?>"><?php echo $lang['MEN_WATCHES']; ?></a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Women</h4>
								<ul>
									<li><a href="women.php?lang=<?php echo $lang['LANG']; ?>"><?php echo $lang['WOMEN_WATCHES']; ?></a></li>
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
				<li><a class="color10" href="contact.php?lang=<?php echo $lang['LANG']; ?>"><?php echo $lang['MENU_CONTACT_US']; ?></a></li>
<?php
if(isset($_SESSION["user"])){
?>	
<li><a class="color3" href="logout.php?lang=<?php echo $lang['LANG']; ?>"><?php echo $lang['LOGOUT']; ?></a></li>
<?php
}
else
{
?>
<li><a class="color3" href="login.php?lang=<?php echo $lang['LANG']; ?>"><?php echo $lang['LOGIN']; ?></a></li>
<?php
}
?>	
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
    	  <h3><?php echo $lang['CATEGORIES']; ?></h3>
			<li class="cat-item cat-item-62"><a href="men.php?lang=<?php echo $lang['LANG']; ?>"><?php echo $lang['MEN_WATCHES']; ?></a> <span class="count"></span></li>    <!--tre modificat!-->
			<li class="cat-item cat-item-41"><a href="women.php?lang=<?php echo $lang['LANG']; ?>"><?php echo $lang['WOMEN_WATCHES']; ?></a> <span class="count"></span></li>   <!--tre modificat!-->
		</div>
    	<div class="col-md-8 mens_right">
    		<div class="dreamcrub">
			   	<ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.php?lang=<?php echo $lang['LANG']; ?>" title="Go to Home Page"><?php echo $lang['MENU_HOME']; ?></a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="home">&nbsp;
                        <?php echo $lang['WOMEN']; ?>&nbsp;
                    </li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="mens-toolbar">
    	       <div id="product-grid">
	<div class="txt-heading"><?php echo $lang['MENU_PRODUCTS']; ?></div>
			   				<?php
						$product_array = $db_handle->runQuery("SELECT * FROM tblproduct WHERE sex = 'F' ORDER BY id ASC");
						if (!empty($product_array)) { 
						foreach($product_array as $key=>$value){
					?>
			   <li class="last simpleCart_shelfItem">
							<a class="cbp-vm-image" href="">
								<div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
								<form method="post" action="checkout.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
									<div class="mask1"><img src="<?php echo $product_array[$key]["image"]; ?>" alt="image" class="img-responsive zoom-img"></div>
									<div class="mask">
					                </div>
									<div class="product_container">
										<h4><?php echo $product_array[$key]["id"]; ?></h4>
									   <h4><?php echo $product_array[$key]["name"]; ?></h4>
									    <div class="price mount item_price"><?php echo "&euro;".$product_array[$key]["price"]; ?></div>
									    <a></a>
										<input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="button item_add cbp-vm-icon cbp-vm-add" />
									 </div>	
									</form>
								  </div>
			                     </div>
		                      </div>
							</a>
						</li>
								<?php
				}
		}
	?>
	
	</div>
					</ul>
				</div>
				<script src="js/cbpViewModeSwitch.js" type="text/javascript"></script>
                <script src="js/classie.js" type="text/javascript"></script>
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
 	