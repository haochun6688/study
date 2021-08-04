<!DOCTYPE >
<html>
	<head>
		<meta http-equiv="X-US-compatible" content="text/html" />
		<meta charset="UTF-8" />
		<title>
			Array usage
		</title>
	</head>
	<body>
		<a href="./for.php">Home page</a>
		<h1 align="center">This is a array practice</h1>
		<ol>
			<h2 >this is for test</h1>
<?php
    //phpinfo();
    $myarray = array("sandwitch", "cola", "coffee", "hotdog");
	//unset($myarray[1]);
	//$myarray[2] = 'Hot tea';
	echo "manu for order<br>";
	print_r($myarray);
	echo "<hr><br>$myarray[0]";
	var_dump($myarray);
	echo "<hr>";
	echo $myarray[2];
	$a = TRUE;
	echo "<br>";
	var_dump($a);
?>
		</ol>
		</body>
</html>