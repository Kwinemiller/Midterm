<?php
$csv = array_map('str_getcsv', file('data.csv'));

$file = file($csv, 'r');
while (($line = fgetcsv($file)) !== FALSE){
}
fclose($file)

if (($one = fopen($csv, 'r')) !== FALSE){
	while (($data = fgetcsv($one, 1000, ',')) !== FALSE){
	}
	fclose($one);
}

if(strlen($error)>0) echo $error;
else{
	$fh=fopen('../data.csv', 'a');
	fputs($fh,$_POST['name'].PHP_EOL);
	fclose($fh);
	echo 'Thanks for adding '.$_POST['name'].' to the Great Quotes';
	
if(count($_POST)>0){
	if(file_exists('../data.csv')){
		$line_counter=0;
		$new_file_content='';
		$fh=fopen('../data.csv', 'r');
		while ($line=fgets($fh)){
			if($line_counter==$_GET['index']) $new_file_content.=$_POST['name'].PHP_EOL;
			else $new_file_content.=$line;
			$line_counter++;
	}
	fclose($fh);

	file_put_contents('../data.csv',$new_file_content);
	echo 'You have successfully modified the line';
	}
	
if(!isset($_GET['index'])){
	die('Please enter the line you want to delete');
}
$author_to_be_deleted=$_GET['index'];

if(file_exists('../data.csv')){
	$line_counter=0;
	$new_file_content=''; //ROD C
	$fh=fopen('../data.csv', 'r');
	while ($line=fgets($fh)){
		if($line_counter==$_GET['index']) $new_file_content.=PHP_EOL;
		else $new_file_content.=$line;
		$line_counter++;
}
fclose($fh);

file_put_contents('../data.csv',$new_file_content);
echo 'You have deleted a line';
}




	?>