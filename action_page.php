<?php

var_dump($_POST);

$uname = $_POST['uname']; 
$psw = $_POST['psw'];



?>

<p>User name: <?= $uname?><p>
<p> Password: <?= $psw?><p>

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$uname = test_input($_POST["uname"]);
	$psw = test_input($_POST["psw"]);
}

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


?>
