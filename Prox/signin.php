<?php
session_start();
if(isset($_POST['email'])&&isset($_POST['password'])&&strlen($_POST['email'])&&strlen($_POST['password']))
{
	$sql = new mysqli('localhost','root','','prox');
	$sql->set_charset('utf8');
	if($sql->connect_errno)
	{
		echo 'Sorrey, there is problem to connect with database';

	}
	else
	{

		$r = $sql->query("SELECT * FROM `users` WHERE `email`='{$_POST['email']}' AND `password`='{$_POST['password']}'");
		if($r->num_rows)
		{
			$_SESSION['user_name']= $r->fetch_assoc();
			
			header("location: ./");

		}
		else{
			echo 'the account witch you havs entered not correctly';

		}

	}


}else{
echo 'Sorry, You Should write your email and password correctly';
}
?>