Test

<?php
	$values = "GET<br/>";
	if(count($_GET)>0){
		foreach($_GET as $key => $getValues){
			$values = $values . $key ."=" . $getValues . "<br/>";
		}
	}
	$values = $values . "POST<br/>";
	if(count($_POST)>0){
		foreach($_POST as $key => $getValues){
			$values = $values . $key ."=" . $getValues . "<br/>";
		}
	}
	$retour = file_put_contents("test.txt",);
	echo $retour."</BR>";
	
	echo file_get_contents("test.txt");
?>
