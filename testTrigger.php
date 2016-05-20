Test

<?php
	$retour = file_put_contents("test.txt","test");
	echo $retour."</BR>";
	
	echo file_get_contents("test.txt");
?>
