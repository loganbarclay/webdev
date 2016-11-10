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
<?php if(isset($unameError))  { ?>
	<span id= "unameError" class="error"><?= $unameError ?> </span>
<?php  } ?>


<?php if(isset($unameError))  { ?>
	<span id= "unameError" class="error"><?= $unameError ?> </span>
<?php  } ?>

<?php
// if valid, redirect to page
if($valid == true) {
	header(*Location: index.php;
}	

// in not vaild, redirect to form


?>












