<?php

// add parameters
function signup(){
	session_start();
	if(isset($_SESSION['logged']) && $_SESSION['logged']==true) header('location: private.php');

	if(count($_POST)>0){
		$fh=fopen('users.csv','a+');
		fputs($fh,$_POST['email'].';'.password_hash($_POST['password'],PASSWORD_DEFAULT).PHP_EOL);
		fclose($fh);
		die('You created your account. Sign in please');
	
}
?>
<form method="POST">
	<input type="email" name="email" placeholder="Email" />
	<input type="password" name="password"  placeholder="password" />
	<button type="submit">Create account</button>
</form>

<?php
function signin(){
	session_start();
	if(isset($_SESSION['logged']) && $_SESSION['logged']==true) header('location: private.php');
		if(count($_POST)>0){
		$fh=fopen('users.csv','r');
		while($line=fgets($fh)){
			$line=trim($line);
			$line=explode(';',$line);
			echo $line[0];
			echo $_POST['email'];
			echo '<hr />';
			if($line[0]==$_POST['email']){
				if(password_verify($_POST['password'],$line[1])){
					$_SESSION['logged']=true;
					$_SESSION['email']=$line[0];
					$_SESSION['products']=[];
					header('location: private.php');
				}else die('Not today: incorrect password');
			}
		}
		fclose($fh);
		die('Not today: you must create an account first');
}
?>

<?php
function signout(){
	session_start();
	if(!isset($_SESSION['logged'])) header('location: signin.php');
	unset($_SESSION['logged']);
	session_destroy();
	
}
?>
Now you are logged out.

<?php
function is_logged(){
	// check if the user is logged
	//return true|false
	session_start();
	if(match_found_in_database()){
		$_SESSION['logged'] = true;
}
}
?>