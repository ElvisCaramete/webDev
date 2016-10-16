<?php
include_once 'common.php';
?>
<html>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="Generator" content="Design-Lib.Com - Basic Web Page Layouts Creator 1.0">
		<title><?php echo $lang['PAGE_TITLE']; ?></title>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body>
		<div id="languages">
			<a href="register.php?lang=en"><img src="images/en.png" /></a>
			<a href="register.php?lang=ro"><img src="images/ro.png" /></a>
		</div>
        <h2><?php echo $lang['REGISTER_PAGE']; ?></h2>
        <a href="index.php?lang=<?php echo $lang['LANG']; ?>"><?php echo $lang['BACK_BUTTON']; ?></a><br/><br/>
        <form action="register.php" method="POST">
           Username: <input type="text" name="username" required="required" /> <br/>
           Password: <input type="password" name="password" required="required" /> <br/>
           <input type="submit" value="<?php echo $lang['REGISTER']; ?>"/>
        </form>
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
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$password = mysqli_real_escape_string($db,$_POST['password']);
	$bool = true;
	
	$query = mysqli_query($db, "Select * from users"); //Query the users table
	while($row = mysqli_fetch_array($query)) //display all rows from query
	{
		$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
		if($username == $table_users) // checks if there are any matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
			Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
		}
	}
	if($bool) // checks if bool is true
	{
		mysqli_query($db, "INSERT INTO users (username, password) VALUES ('$username','$password')"); //Inserts the value to table users
		Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
		Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
	}
	
	echo "Username entered is : ". $username . "<br/>";
	echo "Password entered is : ". $password;
}