<!DOCTYPE html>
<html>
	
	<head>
		<meta http-equiv="X-US-compatible" content="text/html"/>
		<meta charset="UTF-8"/>
	<title>whileloop</title>	
	<style>
		.article, .other_list{
			padding: 20px;
			margin: 10px;
			border: solid 10px #aaa;
			border-radius: 6px;
		}
	</style>
	</head>
	<body>
		
<?php
	//echo "<hr>";
	echo "This is for test.";
	//echo "<ol>";
	echo "<br>";
	$a=0;
	while ($a <= 100) {
		if ($a !=70 && $a !=90) {
		echo $a;
			if ($a <100) {
				echo ",";
				}	
		}	
				$a +=10;
	}
	//echo "</ol>";
	//echo "</hr>";
?>
</hr>
</body>
</html>