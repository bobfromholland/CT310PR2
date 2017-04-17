<?php
$loginPage = FALSE;
include 'support.php';
include 'control.php'; 
include 'header.php';
?>
</head>
<!-- Start of page Body -->
<body>
	<div class="header">
		<h2> CT 310 Assignment 6 Login: Admin Page to Hand Generate Hash </h2>
	</div>
	<div class="contents">
<?php
if (isset ( $_POST ['item'] )) {
	$item = $_POST ['item'];
	echo "<p>You entered $item </p>";
	$h = password_hash ( $item, PASSWORD_BCRYPT );
	echo "<p>Resulting hash is: $h</p>";
}
?>	
		<p>Enter your proposed password and press submit to see hash:</p>
		<form action="admin.php" method="post">
			<input type="password" name="item"> <input type="submit">
		</form>
		<p>
			<a
				href="http://www.sitepoint.com/hashing-passwords-php-5-5-password-hashing-api/">PHP
				Documentation on password hashing and verification.</a>
	</p>
	</div>
<?php include 'footer.php'; ?>