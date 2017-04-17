<?php

require_once "assets/passwordLib.php";

$dir="/s/bach/n/under/burtar/public_html/BobWeb/ct310-master/";

class User {
	public $first_name = 'Jon'; /* Users first name */
	public $last_name = 'Doe'; /* Users last name */
	public $full_name = ''; /* First then last name with space */
	public $user_name = "";
	public $email = "";
	public $hash = ''; /* Hash of password */
}
function makeNewUser($first, $last,$un, $em, $h) {
	$u = new User ();
	$u->first_name = $first;
	$u->last_name = $last;
	$u->full_name = $first . " " . $last;
	$u->user_name = $un;
	$u->email = $em;
	$u->hash = $h;
	return $u;
}
function setupDefaultUsers() {
	$users = array ();
	$i = 0;
	$users [$i ++] = makeNewUser ( 'Austin', 'Burt', 'arburty', 'austin@burt.us.com','$2a$10$lTki/ZcawAzG2CPqiCU2k.YrNPZcOGSD6GXBn3PEpEFFD09PvELlS' );
	
	$users [$i ++] = makeNewUser ( 'Mike', 'Tyson', 'EarByter','austin@burt.us.com', '$2a$10$Sv.7MTQHnwN3v6l7GbTv4O7u.xY37H/Pdl9jAnfCOiAxxrJj.Euzq' );
	
	$users [$i ++] = makeNewUser ( 'Von', 'Miller','stripSack', 'austin@burt.us.com', '$2a$10$BdKd7CEy1NtC6XLZKWFA4eHe573KhppVOeDoHIK8CNB1TqKsxDmIS' );
	
	$users [$i ++] = makeNewUser ( 'Nikhil', 'Patil','ct310', 'nspatil@colostate.edu', '$2a$10$rJo7w1WsCvR9UJ5r9iFKFeS5S70TsEuiCJX3a3AbqEVbpil7qPnoG' );
	writeUsers ( $users );
}
function writeUsers($users) {
	$fh = fopen ( 'users.csv', 'w+' ) or die ( "Can't open file" );
	fputcsv ( $fh, array_keys ( get_object_vars ( $users [0] ) ) );
	for($i = 0; $i < count ( $users ); $i ++) {
		fputcsv ( $fh, get_object_vars ( $users [$i] ) );
	}
	fclose ( $fh );
}
function readUsers() {
	if (! file_exists ( 'users.csv' )) {
		setupDefaultUsers ();
	}
	$users = array ();
	$fh = fopen ( 'users.csv', 'r' ) or die ( "Can't open file" );
	$keys = fgetcsv ( $fh );
	while ( ($vals = fgetcsv ( $fh )) != FALSE ) {
		if (count ( $vals ) > 1) {
			$u = new User ();
			for($k = 0; $k < count ( $vals ); $k ++) {
				$u->$keys [$k] = $vals [$k];
			}
			$users [] = $u;
		}
	}
	fclose ( $fh );
	return $users;
}
function userHashByUserName($users, $user_name) {
	$res = '';
	foreach ( $users as $u ) {
		if ($u->user_name == $user_name) {
			$res = $u->hash;
		}
	}
	return $res;
}
function userEmailByUserName($users, $user_name) {
	$res = '';
	foreach ( $users as $u ) {
		if ($u->user_name == $user_name) {
			$res = $u->email;
		}
	}
	return $res;
}
function userFullNameByUserName($users, $user_name) {
	$res = '';
	foreach ( $users as $u ) {
		if ($u->user_name == $user_name) {
			$res = $u->full_name;
		}
	}
	return $res;
}
function changePasswordByUserName($users, $user_name, $newP) {
	foreach ( $users as $u ) {
		if ($u->user_name == $user_name) {
			$u->hash = password_hash ( $newP, PASSWORD_BCRYPT );
			break;
		}
	}
	unlink('users.csv');
	writeUsers($users);
}
?>
