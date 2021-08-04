<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-US-compatible" content="text/html"/>
		<meta charset="UTF-8" />
		<title>
			homework_W03
		</title>
	</head>
	<h1 align="center"><div style="color: blue">This is homework for week03</div></h1>
	<body>
		<?php
		for ($i=10; $i <=100 ; $i+=10) {
			//echo "<br><li><font color=red>$i</font></li>";
			echo "<font color=red>$i ,</font>";
		}
		
		//using for to solve problem
		echo "<br><hr>";
		for ($j=10; $j <=100 ; $j+=10) { 
			if ($j !=70 && $j != 90) {
				echo "<font color=red>$j</font>";
				if ($j <100) {
					echo "<font color=blue>, </font>";
				}
			}
		}
		
		//Homewrok question 2
		echo "<br><hr>";
		//echo "<ol>";
		$newstype = array('Sport','Political','Technology','Space','Food','Travel' );
		echo "<ol><ul>";
		foreach ($newstype as $key => $value) {
			echo "<li><a href='#'>{$value}</a></li>";
			}
		echo "</ul></ol>";
		//echo "</ol>";
		?>
	</body>
	</html>