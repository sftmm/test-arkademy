<?php

function is_username_valid($username){
	if(preg_match("/^[a-z]{8}$/", $username)) {
  		return true;
} else {
  		return false;
		}

}

function is_password_valid($password){
	if(preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*\W)[a-zA-Z0-9\S]{8,}$/", $password)) {
  		return true;
} else {
  		return false;
		 }

}

echo is_username_valid("sofiutam"); // return true
echo is_username_valid("sofiutami"); // return false

echo is_password_valid("Sofiutam@1403"); // return true
echo is_password_valid("sofiutami"); // return false


?>

