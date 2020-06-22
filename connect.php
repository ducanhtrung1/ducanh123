<?php
$conn_string="host=ec2-52-202-146-43.compute-1.amazonaws.com port=5432 dbname=dd0ia7dkcbkemu user=
opiydllrfajeqd password=2cd4366cab6208490697f0b5751bc5f68ae306d361edf21fae00290fdc69bbcf";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}

if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM tblAcc WHERE username='".$username."' AND pass='".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if ($row==1)
{
	echo "Login success";
}
else
{
	echo "Login failed";
}
?>
