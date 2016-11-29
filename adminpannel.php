<?php
include_once 'common.php';
?>
<?php
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "webdev_db");

$db = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(!empty($_GET["order"])) {
switch($_GET["order"]) {
	case "placeOrder":
		//$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
		//$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
		$item_total=0;
		if(!empty($_SESSION["cart_item"])){
			$user=$_SESSION["user"];
			mysqli_query($db, "INSERT INTO orders (oname) VALUES ('$user')");
			if ($result = mysqli_query($db, "SELECT oid as max_id FROM orders ORDER BY oid DESC LIMIT 1")) {

				while ($row = mysqli_fetch_assoc($result)) {
					$max_id = intval($row['max_id']);
				}
			}
			foreach ($_SESSION["cart_item"] as $item){
				$name=$item["name"];
				$quantity=$item["quantity"];
				$price=$item["price"];
				mysqli_query($db,"INSERT INTO products (oid, name, quantity, price) VALUES ('$max_id','$name', '$quantity', '$price')");
				$item_total += ($item["price"]*$item["quantity"]);
			}
			
			mysqli_query($db, "UPDATE orders SET totalprice=$item_total WHERE oid=$max_id;");
			
		}
			//$_SESSION["order"] = array_merge(array($_SESSION["user"]),$_SESSION["cart_item"]);
		unset($_SESSION["cart_item"]);
	break;
	case "removeOrder":
		$oid=$_GET["oid"];
		mysqli_query($db, "DELETE FROM products WHERE oid=$oid");
		mysqli_query($db, "DELETE FROM orders WHERE oid=$oid");
		
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
if(isset($_SESSION["user"]) && $_SESSION['user']=="admin"){
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
	header('Location: index.php');
	}
?>
			  <div id="languages">
					<a href="adminpannel.php?lang=en"><img src="images/en.png" /></a>
					<a href="adminpannel.php?lang=ro"><img src="images/ro.png" /></a>
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
if(isset($_SESSION["user"])){
?>	
				<h1>&nbsp;Hello&nbsp;<?php if($_SESSION['user']){ echo $_SESSION['user'];} ?></h1>
<?php
}
?>





<div id="shopping-cart">
<div class="txt-heading">Orders</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdev_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT oid, oname, totalprice FROM orders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<h2> User: " . $row["oname"]. ", Total price: " . $row["totalprice"]. "</h2>";
		$oid=$row["oid"];
		$sql2 = "SELECT name, quantity, price FROM products where oid=$oid";
		$result2 = $conn->query($sql2);
		while($row2 = $result2->fetch_assoc()) {
			echo "Product name: " . $row2["name"]. ", Quantity: " . $row2["quantity"]. ", Price: " . $row2["price"]. "<br>";
		}
		echo "<br>";
		?>
		<button onclick="location.href = 'adminpannel.php?order=removeOrder&oid=<?php echo $oid; ?>';">Remove Order</button>
		<?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</div>





<div id="shopping-cart">
<div class="txt-heading">Add Watch</div>
</div>
<div class="account-in">
   	  <div class="container">
   	     <form action="adminpannel.php" method="POST" > 
		   <div class="register-top-grid">
		   <h2>ADD WATCH</h2>
			 <div>
				<span>Name<label>*</label></span>
				<input type="text" name="name" required="required"> 
			 </div>
			 <div>
				 <span>Code<label>*</label></span>
				 <input type="text" name="code" required="required"> 
			 </div>
			 </div>
			 	<div class="register-top-grid">
					 <div>
						<span>Image<label>*</label></span>
						<input type="text" name="image" required="required">
					 </div>
					 <div>
						<span>Price<label>*</label></span>
						<input type="text" name="price" required="required">
					 </div>
					 <div>
						<span>Sex<label>*</label></span>
						<input type="text" name="sex" required="required">
					 </div>
				<div class="clearfix"> </div>
			 </div>
			 <input type="submit" value="<?php echo "ADD WATCH" ?>"/>
		  </form>
		<div class="clearfix"> </div>
		<div class="register-but">
		   <form>
			   <div class="clearfix"> </div>
		   </form>
		</div>
	   </div>
   </div>
   
   
   
   
   
   <div id="shopping-cart">
<div class="txt-heading">Remove Watch</div>
</div>
<div class="account-in">
   	  <div class="container">
   	     <form action="adminpannel.php" method="POST" > 
		   <div class="register-top-grid">
		   <h2>Remove Watch</h2>
			 <div>
				<span>ID<label>*</label></span>
				<input type="text" name="id" required="required"> 
			 </div>
			 <div></div>
			 </div>
			 <input type="submit" value="<?php echo "REMOVE WATCH" ?>"/>
		  </form>
		<div class="clearfix"> </div>
		<div class="register-but">
		   <form>
			   <div class="clearfix"> </div>
		   </form>
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
<?php
    define("DB_HOST", "localhost");
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "webdev_db");

    $db = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



if($_SERVER["REQUEST_METHOD"] == "POST"){
	$id = mysqli_real_escape_string($db,$_POST['id']);
	if(id!=0){
		$bool=true;
	}else
		$bool=false;
	$name = mysqli_real_escape_string($db,$_POST['name']);
	$code = mysqli_real_escape_string($db,$_POST['code']);
	$image = mysqli_real_escape_string($db,$_POST['image']);
	$price = mysqli_real_escape_string($db,$_POST['price']);
	$sex = mysqli_real_escape_string($db,$_POST['sex']);
	
	if($bool==false) // checks if bool is true
		{
			mysqli_query($db, "DELETE FROM tblproduct WHERE id='$id';"); //Inserts the value to table users
			Print '<script>alert("Successfully removed watch");</script>'; // Prompts the user
			Print '<script>window.location.assign("AdminPannel.php");</script>'; // redirects to register.php
		}
		if($bool==true) // checks if bool is true
		{
			mysqli_query($db, "INSERT INTO tblproduct (name, code, image, price, sex) VALUES ('$name','$code','$image','$price','$sex')"); //Inserts the value to table users
			Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
			Print '<script>window.location.assign("AdminPannel.php");</script>'; // redirects to register.php
		}
	}

?>		