<?php

var_dump($_POST);

$uname = $_POST['uname']; 
$psw = $_POST['psw'];

if(strlen($uname) <= 0 || strlen($uname) > 40) {
	$unameError = "Username is required.  Must be less than 40 characters.";
}

?>

<p>User name: <?= htmlspecialchars($uname)?><p>
<?php if(isset($unameError))  { ?>
	<span id= "unameError" class="error"><?= $unameError ?> </span>
<?php  } ?>

<p> Password: <?= htmlspecialchars($psw)?><p>















