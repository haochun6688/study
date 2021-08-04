<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07212021_02</title>
</head>
<body>
    <h1>this is for test2132412341234</h1>
    <?php
        echo 'this is my test';
        echo "<br>";
		$my_name='Josh Hsu';
		$price=round(19.6/3);
		$a = 1;
		$b = 2;
    ?>
    <?php
        echo "1+2=", (1+2);
        echo "<br>","<hr></hr>";
		echo "<li>","$my_name", "</li> ";
		echo "<br>";
		?>
        <a href="./">,<img src="pictures/rockman.jpeg" width="300" height="169"/></a>

        <?php
        echo "<li></li>";
        echo "$price";
         ?>
        <li></li>
        <?php
        // array practice 7/22/2021
        $party_need = array('Softdrink','hotdog','salad','beef');
        $party_need[]="steakhouse";
		print_r($party_need);
		echo "<hr></hr>";
		echo $party_need[1];
		$party_need[2]= "pizza";
		echo "<hr></hr>";
		print_r($party_need);
		// var_dump practice
		echo "<hr></hr>";
		var_dump($a == $b);
		// if loop practice 7/22/2021
		echo "<hr></hr>";
		if ($a <$b) {
			echo '$a small than $b';
		}
		elseif ($a>$b) {
			echo '$a larger than $b';
		}else {
			echo '$a equal to $b';
		}
		// switch practice
		echo "<hr></hr>";
		$name='asdfas';
		switch ($name) {
			case 'rita':
				echo "This is my wife";
				break;
			case 'josh':
				echo "This is myself";
			break;
			default:
				echo "stranger";
				break;
		}
		// for loop practice
		//for ($i=0; $i < 10; $i++) {

		//}
		// PHP practice on 7/24/2021
		echo "<hr></hr>";
		$service_tip= 1.1;
		$total_bill=900;
		$friend=4;
		$total= ($total_bill*$service_tip);
		echo "This time's bill for everyone is:" .round($total_bill*$service_tip/$friend). "!";
		echo "<hr></hr>{$total}";
        ?>
        <!-- 07/26/2021 for loop practice -->
        <?php
        $dinner = array('hotdog','pizza','steak','nuddle','sandwich');
        print_r($dinner);
        for ($i=0; $i < 10; $i++) {
          // code...
          echo "This is Josh practice on 7/26/2021 ${i}<br>";
        }
        //while loop practice date:02082021
        echo "<ol>";
        while ($a <=10) {
          echo "<li>while loop test {$a}</li>";
          $a = $a+1;
        }
        echo "</ol>";
        // foreach practice 08022021
        foreach ($dinner as $key => $value) {
          // code...
          echo "<hr><li>{$value}</li></hr>";
          echo "<hr>{$key} {$value}</hr>";
        }
        print_r($dinner);

         ?>
         <div class="question">
           <h2><?php foreach ($dinner as $key => $value) {
             // code...
             echo "<li><a href='#'>{$value}</a></li>";

           } ?>
           </h2>
         </div>
         <!-- homework for week03 -->
      <?php
      echo "<hr>";
      for ($i=0; $i <=100 ; $i+=10) {
        // code...
        if ($i !=70 && $i !=90) {
          // code...
          echo "$i";
          if ($i <100) {
            // code...
            echo ",";
          }
        }
      }
      echo "</hr>";?>
      <hr>
      <?php
      $a=10;
      while ($a <= 100) {
          if ($a !=70 && $a !=90) {
              echo $a;
			  if ($a <100) {
				  echo ",";
			  }
          }
          $a+=10;
      }
      ?>
      <hr>
      <p>this is a test!</p>
      <a href="#"><?php echo ($a+20) ;?></a>
           
     </body>
</html>
