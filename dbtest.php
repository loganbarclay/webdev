<?php
require_once('Dao.php');

$dao = new Dao();

$exists = $dao->userExists("snoopy@peanuts.com");
var_dump($exists);

$exists = $dao->userExists("doesnotexit@doesnot.com");
var_dump($exists);

$uname = "newuser@mail.com";
$psw = "password";

$dao->addUser($uname, $psw);

?>
