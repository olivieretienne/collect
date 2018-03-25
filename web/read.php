<h2>Data</h2>
<pre>
<?php
    $decode = $_GET['decode'];

    $file = 'data.txt';
 	$current = file_get_contents($file);
	for ($i = 0; $i < strlen($current); $i++) {
		if ($decode === "1"){
			$cur_chr = $current[$i];
			if ($cur_chr != '\n' && $cur_chr != '\r'){ 
				echo chr(ord($cur_chr) - 1);
			}
			else {
				echo $cur_chr;
			}
		}
		else {
			echo $current[$i];
		}
	}
?>
</pre>