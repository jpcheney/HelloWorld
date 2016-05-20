Test<br/>

<?php
	$values = "method=". $_SERVER['REQUEST_METHOD']."<br/>GET<br/>\n";
	if(count($_GET)>0){
		foreach($_GET as $key => $getValues){
			$values = $values . $key ."=" . $getValues . "<br/>\n";
		}
	}
	$values = $values . "POST<br/>\n";
	if(count($_POST)>0){
		foreach($_POST as $key => $getValues){
			$values = $values . $key ."=" . $getValues . "<br/>\n";
		}
	}
	$retour = file_put_contents("test.txt",$values,FILE_APPEND);
	//echo $retour."</BR>";
	
	echo file_get_contents("test.txt");
?>
