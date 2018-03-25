<?php
   $entityBody = file_get_contents('php://input');

   $file = 'data.txt';

   if ($entityBody !== ""){
		$current = file_get_contents($file);
		$current .= $entityBody;
		file_put_contents($file, $current);
	    header("HTTP/1.1 200 OK");
   }
   else {
	   	header("HTTP/1.1 400 Bad request");
		echo "No content";
   }
?>