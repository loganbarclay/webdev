<?php

$uname = $_POST['uname']; 
$psw = $_POST['psw'];
$valid = true;

if(strlen($uname) <= 0 || strlen($uname) > 40) {
	$unameError = "Username is required.  Must be less than 40 characters.";
}
if(strlen($psw) <= 0 || strlen($uname) > 40) {
	$unameError = "Password is required.  Must be less than 40 characters.";
}


?>
 
<p>Username: <?= htmlspecialchars($uname) ?></p>
<?php if(isset($unameError))  { ?>
	<span id= "unameError" class="error"><?= $unameError ?> </span>
<?php  } ?>

<p>Password: <?= htmlspecialchars($psw) ?></p>
<?php if(isset($unameError))  { ?>
	<span id= "unameError" class="error"><?= $unameError ?> </span>
<?php  } ?>













