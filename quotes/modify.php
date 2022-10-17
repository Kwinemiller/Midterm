<?php
if(count($_POST)>0){
	//save the quotes name into the file
	if(file_exists('../data/quotes.csv')){
		$line_counter=0;
		$new_file_content=''; //ROD C
		$fh=fopen('../data/quotes.csv', 'r');
		while ($line=fgets($fh)){
			if($line_counter==$_GET['index']) $new_file_content.=$_POST['name'].PHP_EOL;
			else $new_file_content.=$line;
			$line_counter++;
	}
	fclose($fh);

	file_put_contents('../data/quotes.csv',$new_file_content);
	echo 'You have successfully modified the quote';
	}
	
}else{
	$author_name='';
	$line_counter=0;
	$fh=fopen('../data/quotes.csv', 'r');
	while($line=fgets($fh)){
		if($line_counter==$_GET['index']){
			//display the quotes
			$author_name=trim($line);
		}
		$line_counter++;
			
	}
}

//http://localhost/GreatQuotes/authors/modify.php?index=0
fclose($fh);
?>
<form method="POST">
	Modify the author's name<br />
	<input type="text" name="name" value="<?= $author_name ?>"/><br />
	<button type="submit">Modify author
	</button>
</form>
<?php
if(count($_POST)>0){
	//save the quotes name into the file
	if(file_exists('../data/quotes.csv')){
		$line_counter=0;
		$new_file_content=''; //ROD C
		$fh=fopen('../data/quotes.csv', 'r');
		while ($line=fgets($fh)){
			if($line_counter==$_GET['index']) $new_file_content.=$_POST['name'].PHP_EOL;
			else $new_file_content.=$line;
			$line_counter++;
	}
	fclose($fh);

	file_put_contents('../data/quotes.csv',$new_file_content);
	echo 'You have successfully modified the author';
	}
	
}else{
	$quote_name='';
	$line_counter=0;
	$fh=fopen('../data/quotes.csv', 'r');
	while($line=fgets($fh)){
		if($line_counter==$_GET['index']){
			//display the quotes
			$quote_name=trim($line);
		}
		$line_counter++;
			
	}
}

//http://localhost/GreatQuotes/quotes/modify.php?index=0
fclose($fh);
?>
<form method="POST">
	Modify the author's name<br />
	<input type="text" name="name" value="<?= $quote_name ?>"/><br />
	<button type="submit">Modify author
	</button>
</form>
