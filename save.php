<!--this file serves to edit the followers.txt file used to keep old follower count-->
<?php
	$myFile = "followers.txt";

	//opens the file
	$fh = fopen($myFile, 'w') or die("can't open file");
	//saves the post value in a variable
	$stringData = $_POST["name"];
	fwrite($fh, $stringData);
	fclose($fh);
?>
