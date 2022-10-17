<?php
if(!isset($_GET['index'])){
	die('Please enter the author you want to delete');
}
$author_to_be_deleted=$_GET['index'];

if(file_exists('../data/authors.csv')){
	$line_counter=0;
	$new_file_content=''; //ROD C
	$fh=fopen('../data/authors.csv', 'r');
	while ($line=fgets($fh)){
		if($line_counter==$_GET['index']) $new_file_content.=PHP_EOL;
		else $new_file_content.=$line;
		$line_counter++;
}
fclose($fh);

file_put_contents('../data/authors.csv',$new_file_content);
echo 'You have deleted a author';
}

//http://localhost/GreatQuotes/authors/delete.php?index=4