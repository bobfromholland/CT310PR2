<?php
$loginPage = TRUE;
include 'loginSupport.php';
include 'loginControl.php';
$users = readUsers();
$name =$_SESSION['userName4reset'];

if ($_GET['key'] != $_SESSION['keyVal']) {
	header ( "Location: $host$uri/login/login.php" );
	exit ();
}
if (isset ($_POST['first']) && isset ($_POST['second'])) {
	$first = $_POST['first'];
	$second = $_POST['second'];
	if ($first == $second) {
		changePasswordByUserName($users, $name, $first);
		header ( "Location: https://$host$uri/login/logout.php" );
		exit ();
	} else {
		include './header.php';
		include '../jumbotron.php';
		include '../navbar.php';
		echo "Oops! Passwords did not match, go back try again.<br />";
		exit();
	}
	
} else {
	
?>
</head>
<!-- Start of page Body -->
<body>
	<?php
		include './header.php';
		include '../jumbotron.php';
		include '../navbar.php';
	?>
	<div class="contents">
	<br /><p> Enter your new Password</p>
	<form action="#" method="post">
		New Password: <input type="password" name="first"><br>
		Confirm:   <input  type="password" name="second"><br>
		<input type="submit">
	</form>

	
	</div>
<?php  } //closes else ?>
</body>
<?php
include '../footer.php'; ?>