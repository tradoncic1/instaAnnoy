<?php
	$myFile = "followers.txt";

	$fh = fopen($myFile, 'w') or die("can't open file");
	$stringData = $_POST["name"];
	echo "<script type='text/javascript'>alert('$stringData');</script>";
	fwrite($fh, $stringData);
	fclose($fh);
?>  