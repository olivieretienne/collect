<?php
    $file = 'data.txt';
 	$current = file_get_contents($file);
	for ($i = 0; $i < strlen($current); $i++) {
		echo $current[$i];
	}
?>