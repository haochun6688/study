<?php
    //phpinfo();
  	echo "This is my practice of php coding";
	echo "<br>";
	echo "<hr>";
	echo "Hello World <br>";
	$person = 4; //how many person in this party
	$fee = 400; //fee for each person
	$servicerate = 0.1; //server rate for a bill
	$discountrate = 0.9; // discount for a bill
	$total = (($person * $fee) * (1+$servicerate) * $discountrate)/4;
	echo "<hr>This party fee person is = $total<hr>";
	if ($total >= 400) {
		echo "The fee per person is more than or equal to 400 <hr>";
	}	 
	else {
		echo "The fee per person is less than 400";
	} 
	?>