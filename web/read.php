<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<h2>Data</h2>
<pre>
<?php
    $decode = $_GET['decode'];

    $file = 'data.txt';
 	$current = file_get_contents($file);
	for ($i = 0; $i < strlen($current); $i++) {
		if ($decode === "1"){
			$cur_chr = $current[$i];
			if (ord($cur_chr) != 13 && ord($cur_chr) != 10){ 
				$text = chr(ord($cur_chr) - 1);
				if ($text === "<"){
					$text = "&lt;";
				}
				if ($text === ">"){
					$text = "&gt;";
				}
				echo $text;
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