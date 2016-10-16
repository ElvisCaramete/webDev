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
			<a href="login.php?lang=en"><img src="images/en.png" /></a>
			<a href="login.php?lang=ro"><img src="images/ro.png" /></a>
		</div>
        <h2><?php echo $lang['LOGIN_PAGE']; ?></h2>
		<a href="index.php?lang=<?php echo $lang['LANG']; ?>"><?php echo $lang['BACK_BUTTON']; ?></a><br/><br/>
        <form action="checklogin.php" method="POST">
           Username: <input type="text" name="username" required="required" /> <br/>
           Password: <input type="password" name="password" required="required" /> <br/>
           <input type="submit" value="<?php echo $lang['LOGIN']; ?>"/>
        </form>
    </body>
</html>
