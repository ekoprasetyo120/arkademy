<?php
function is_email_valid($email){
	$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
	if (preg_match($regex, $email)) {
	 echo "True";
	} else { 
	 echo " False";
	}
}
is_email_valid('rifki@me.com');//email valid
is_email_valid('rifki@me.c');// email tidak valid

function is_phone_valid($nomor){
	$regex = '/^(^\+62\s?|^0)(\d{3,4}-?){2}\d{3,4}$/';
	if (preg_match($regex, $nomor)) {
		echo "<br>True";
	}else{
		echo "False";
	}
}
is_phone_valid('+6281316002999');

function is_password_valid($password){
	$uppercase = preg_match('@[A-Z]@', $password);
	$lowercase = preg_match('@[a-z]@', $password);
	$number    = preg_match('@[0-9]@', $password);
	$special_char = preg_match('@\W@', $password);


	if(!$uppercase || !$lowercase || !$number || strlen($password) < 8 || !$special_char) {
	 	echo "False";
	}else{
	    if(preg_match('/#/', $password)){
			echo "<br>True";
	 	}else{
	 	echo " False<br>";
	 }
	}
}
is_password_valid('p@ssW0rd#');
is_password_valid('C0d3YourFuture!@');

function is_username_valid($username){
    if (preg_match('/^[a-z]{1}[a-z]{4,8}$/', $username)){
    echo 'True';
    }
    else{
    echo 'False ';
    }
}
is_username_valid('userOke');//username tidak valid menampilkan false
is_username_valid('zerobyte')//username valid menampilkan true
?>
