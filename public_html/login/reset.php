<?php
$loginPage = TRUE;
include 'loginSupport.php';
$users = readUsers();
include 'loginControl.php'; 
include './header.php';
?>
</head>
<!-- Start of page Body -->
<body>
<?php
include '../jumbotron.php';
include '../navbar.php';
if (isset ( $_POST ['item'] )) {
	$name = $_POST ['item'];
	$_SESSION['userName4reset'] = $name;
	$email = userEmailByUserName($users, $name);
	$subject = "Resetting password";
	$content = "Hey $name, trying to reset your password? Follow the link:\n";
	$rand = str_shuffle("ThiswillrltINandmSirnoaBuno0f2453467321892z");
	$content = $content . "$host$uri/login/passwordreset.php?key=" . $rand . "\n";

	if(mail($email,$subject,$content)) {
		$_SESSION['keyVal'] = $rand;
		echo "An email has been sent for " . $name . "<br />";
		echo "Follow the link in the email to reset your password <br />";
	} else {
		echo "$name there was an error trying to send your email <br />";
	}
} else {
?>	
		<p>Select your username from the list to recieve an email with a link to reset your password.</p>
		<form action="reset.php" method="post">
			<select name="item">	
			<?php 
			echo "\n";
			foreach ($users as $u) {
           $flag = ($u->user_name == $_SESSION['userName']) ? 'selected' : '';
           echo "\t\t\t\t<option value=\"$u->user_name\" $flag > $u->user_name </option>\n";
         }
			?>
			</select> 
			<input type="submit" value="Send Email"/>
		</form> <br />
		<p>(Be patient as it may take a moment)</p>
		
	</div>
<?php   }  //closes if else?>
</body>
<?php
	include '../footer.php'; ?>