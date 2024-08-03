<?php
 $path = 'data.txt';
 if (isset($_POST['field1']) && isset($_POST['field2'])) {
	  if (isset($_POST['field3']) && isset($_POST['field4'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['field1'].' - '.$_POST['field2'];
	 $string = $_POST['field3'].' - '.$_POST['field4'];
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
?>
