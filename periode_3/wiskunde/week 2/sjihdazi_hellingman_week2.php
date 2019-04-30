<?php
	$auto_place = 1;
	$bus_place = 3;
	$max_place = 75;
	$echo = false;
	$multiplier = 0;

	function check($bus_place,$auto_place,$max_place,$echo){
		$check = 0;

		if ($bus_place > 30) {
			echo "er mogen niet meer dan 10 bussen zijn";
		}
		else{
			$check ++;
		}

		if ($auto_place > $bus_place * 8 || $auto_place < $bus_place * 3) {
			echo "oi";
		}
		else{
			$check ++;
		}

		if ($bus_place + $auto_place > $max_place) {
			echo "te veel voertuigen";
		}
		else{
			$check ++;
		}

		if ($check == 3) {
			$echo = true;
		}

		if ($echo == true) {
			echo getMax();
		}

	}

	function getMax(){
		$multiplier = $multiplier * 3;

		while ($bus_place <= $multiplier) {
			$bus_place + $bus_place;
		}
	}


	
	echo "opdr 1";
	echo "<br>";
	echo "De dagopbrengst van 40 auto's en 5 bussen is ";
	echo ",-";
	echo "<br><br>";

	echo "opdr 2";
	echo "<br>";
	echo "De opbrengst van 10 bussen is ,- Een auto brengt 3,- per dag op dus dan moet je 200,- / 3,- doen, en dan kom je uit op  auto's";
	echo "<br><br>";

	echo "opdr 3";
	echo "<br>";
	echo "Er mogen max 10 autobussen staan opde parkeerplaats. Dus het max aan opbrengst zou 10 autobussen zijn en de rest helemaal vol met auto's en dat zou dan ,- opbrengen.";
	echo "<br><br>";
?>