<?php

session_start();
if(isset($_POST['user_name'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['password-repeat'])&&$_POST['password-repeat']==$_POST['password']&&strlen($_POST['email'])&&strlen($_POST['password'])&&strlen($_POST['user_name']))
{
	$sql = new mysqli('localhost','root','','prox');
	$sql->set_charset('utf8');
	if($sql->connect_errno)
	{
		echo 'Sorrey, there is problem to connect with database';

	}
	else
	{

		$sql->query("INSERT INTO users (`user_name` , `email`, `password`) VALUES ('{$_POST['user_name']}','{$_POST['email']}','{$_POST['password']}');");
		$r = $sql->query("SELECT * FROM `users` WHERE `email`='{$_POST['email']}' AND `password`='{$_POST['password']}'");
		if($r->num_rows)
		{
			$_SESSION['user']=$r->fetch_assoc();
			header("location: ./");
		}
		else{
			echo 'the account witch you havs entered not correctly OR there is something error';

		}

	}

}else{
echo 'Sorry, You Should write your email and password correctly and match the passwords';
}
?>