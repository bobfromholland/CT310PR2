<?php
$loginPage = TRUE;
include 'loginControl.php';
include 'loginSupport.php';

$users = readUsers();
if (isset ($_POST['usrnm']) && isset ($_POST['passwd'])) {
	$new = strip_tags($_POST ['usrnm']);
	$epw = strip_tags($_POST ['passwd']);
	$old = $_SESSION ['userName'];
	if ($new != $old) {
		if (password_verify($epw, userHashByUserName($users, $new))) {
			$_SESSION ['startTime'] = time ();
			$_SESSION ['userName'] = $new;
			header ( "Location: https://$host$uri/index.php" );
		}
	}
}
include './header.php';
?>

</head>
<!-- Start of page Body -->
<body>
 	<?php
		include '../jumbotron.php';
		include '../navbar.php';
	?>

	<br><br>Please enter your username and password:<br>
	<form action="#" method="post">
		User Name: <input type="text" name="usrnm"><br>
		Password:   <input  type="password" name="passwd"><br>
		<input type="submit">
	</form>
	</div>
	<br />
	Need to reset your password? Click
	<a href = "./reset.php"><Here>Here</a><br />
</body>
<?php include '../footer.php'; ?>
