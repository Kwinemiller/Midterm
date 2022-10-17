<?php
session_start();


if(count($_POST)>0){
	if(!isset($_POST['email']) return('please enter your email');
	if(!isset($_POST['password']) return('please enter your email');
	
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) return('Your email is invalid');
	
	if(strlen($_POST['password'])<8) return('Please enter a password >=8 characters');
	
	preg_match((('/^[^a-zA-Z\d]+/')*2), $string);
	$ban = 'banned.csv';
	echo $f.(is_readable($f)?'is' : 'is not').'readable.<br>'
	
	fgetcsv('email=', 'banned.csv.php')

	fgetcsv('users.csv.php')
	
	

	string password_hash(string $password, mixed $algo, [array $options]);

	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$pwd = $_POST['password'];
		if($email && $pwd){
			header('location: http://localhost/Midterm/auth/auth.php');
		}else{
			$message = "Sign up Successful"
	
	
}

?>
<form method="POST">
	<input type="email" name="email" placeholder="Email" />
	<input type="password" name="password"  placeholder="password" />
	<button type="submit">Create account</button>
</form>
