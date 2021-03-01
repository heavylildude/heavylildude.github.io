<?php
if (isset($_POST['user'])) {
	$input_user = $_POST['user'];
} else {
	echo '<script>location.replace("index.php")</script>';
}

if (isset($_POST['password'])) {
	$input_password = $_POST['password'];
} else {
	echo '<script>location.replace("index.php")</script>';
}

// echo $input_user.'<br>'.$input_password;
// exit();

$servername = "localhost";
$dbusername = "root";
$dbpassword = "yes";
$dbname = "sample_articles";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

$sql = "SELECT * FROM cms_admin WHERE admin_email = '".$input_user."' AND admin_password = '".$input_password."' AND status = '1' ";
$result = mysqli_query($conn, $sql);
$check_if_exist = mysqli_fetch_assoc($result);

if ($check_if_exist) {
	// echo 'yes';
	session_start();
	// temporary storage
	$_SESSION['mywebsite'] = $input_user;
	echo '<script>location.replace("dashboard.php")</script>';

} else {
	// echo 'no';
	echo '<script>location.replace("index.php?con=1")</script>';
}

mysqli_close($conn);
?>