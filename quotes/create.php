<?php
if(count($_POST)>0){
	
	$error='';

	// Make sure the name is not already in the file
	if(file_exists('../data/quotes.csv')){
		$fh=fopen('../data/quotes.csv', 'r');
		while ($line=fgets($fh)){
			if($_POST['name']==trim($line)){
				//found the name already
				$error='The quote already exits';
			};
		}
		fclose($fh);
	}

	if(strlen($error)>0) echo $error;
	else{
		// Add name to the CSV file)
		$fh=fopen('../data/quotes.csv', 'a');
		fputs($fh,$_POST['name'].PHP_EOL);
		fclose($fh);
		echo 'Thanks for adding '.$_POST['name'].' to our amazing website!';
	}
}

//http://localhost/GreatQuotes/quotes/create.php
?>
<a href="index.php">Go back to index<br />
<form method="POST">
	Enter the author's name<br />
	<input type="text" name="name"/><br />
	<button type="submit">Add quote
	</button>
</form>