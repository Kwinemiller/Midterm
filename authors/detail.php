<a href="index.php">Go back to index</a>
<hr />
<?php 
$line_counter=0;
$fh=fopen('../data/authors.csv', 'r');
while($line=fgets($fh)){
	if($line_counter==$_GET['index']){
		//display the authors
		echo $line;
	}
	$line_counter++;
	
	
}
fclose($fh);

//http://localhost/GreatQuotes/authors/detail.php?index=1

?>

<a href="modify.php?index=<? $_GET['index' ?>">modify</a>
<a href="delete.php?index=<? $_GET['index' ?>">delete</a>