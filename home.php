<?php

require_once 'token.php';


$val = $_POST["token"];


if(isset($_POST['updatepost'])){
	if(token::checkToken($val,$_COOKIE['sse1'])){
		echo "Hello I'm Pasan".$_POST['updatepost'];		
	}
	else{
	echo "wrong".$_COOKIE['sse1'];
	}
}
?>