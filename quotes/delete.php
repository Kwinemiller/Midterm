<?php
if(!isset($_GET['index'])){
	die('Please enter the quote you want to delete');
}
$quote_to_be_deleted=$_GET['index'];

if(file_exists('../data/quotes.csv')){
	$line_counter=0;
	$new_file_content=''; //ROD C
	$fh=fopen('../data/quotes.csv', 'r');
	while ($line=fgets($fh)){
		if($line_counter==$_GET['index']) $new_file_content.=PHP_EOL;
		else $new_file_content.=$line;
		$line_counter++;
}
fclose($fh);

file_put_contents('../data/quotes.csv',$new_file_content);
echo 'You have deleted a author';
}

//http://localhost/GreatQuotes/quotes/delete.php?index=4