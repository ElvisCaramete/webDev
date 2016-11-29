<?php
include_once 'common.php';
?>
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],$_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k)
								$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
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
			<li class="active grid" ><a href="index.php?lang=<?php echo $lang['LANG']; ?>"><?php echo $lang['MENU_HOME']; ?></a>
			</li>
			<li><a class="color4" href="#"><?php echo $lang['MENU_PRODUCTS']; ?></a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4><?php echo $lang['MEN']; ?></h4>
								<ul>
									<li><a href="men.php?lang=<?php echo $lang['LANG']; ?>"><?php echo $lang['MEN_WATCHES']; ?></a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4><?php echo $lang['WOMEN']; ?></h4>
								<ul>
									<li><a href="women.php?lang=<?php echo $lang['LANG']; ?>"><?php echo $lang['WOMEN_WATCHES']; ?></a></li>
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
											<span class="price">29.99 &euro;</span>
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
<?php
if(isset($_SESSION["user"]) && $_SESSION['user']!="admin"){
?>	
				<h1>&nbsp;Hello&nbsp;<?php if($_SESSION['user']){ echo $_SESSION['user'];} ?></h1>
				<button onclick="location.href = 'adminpannel.php?order=placeOrder';">Place Order</button>
				<tr><p> <a href="checkout.php?action=empty" class="simpleCart_empty">Empty Cart</a></p></tr>
<?php
}
else if(isset($_SESSION["user"]) && $_SESSION['user']=="admin"){
?>
	<h1>Hello&nbsp;<?php if($_SESSION['user']){ echo $_SESSION['user'];} ?></h1>
	<button onclick="location.href = 'adminpannel.php?order=placeOrder';">Place Order</button>
	<h1><a href="adminpannel.php?lang=<?php echo $lang['LANG']; ?>">You can visit admin pannel</a></h1>
<?php
}
else
{
?>

	<h1>In order to place the order you have to login first</h1>
<?php
}
?>
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>
<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>	
<table cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th><strong>Name</strong></th>
<th><strong>Code</strong></th>
<th><strong>Quantity</strong></th>
<th><strong>Price</strong></th>
<th><strong>Action</strong></th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
		?>
				<tr>
				<td><strong><?php echo $item["name"]; ?></strong></td>
				<td><?php echo $item["code"]; ?></td>
				<td><?php echo $item["quantity"]; ?></td>
				<td><?php echo "&euro;".$item["price"]; ?></td>
				<td><a href="checkout.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">Remove Item</a></td>
				</tr>
				<?php
        $item_total += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="5" align=right><strong>Total:</strong> <?php echo "&euro;".$item_total; ?></td>
</tr>
</tbody>
</table>		
  <?php
}
?>
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
	