<?php
	$auto_place = 1;
	$bus_place = 3;
	$max_place = 75;
	$echo = false;
	$bus_value


	function check($bus_place,$auto_place,$max_place,$echo){
		$check = 0;

		if ($bus_place > 30) {
			echo "er mogen niet meer dan 10 bussen zijn";
			$check ++;
		}
		else {
			$bus_place = $_POST[$bus_value];
		}

		if (condition) {
			# code...
		}







	}

	function getMax(){

	}


	
	echo "opdr 1";
	echo "<br>";
	echo "De dagopbrengst van 40 auto's en 5 bussen is ";
	echo $auto_cost * 40 + $bus_cost * 5 .",-";
	echo "<br><br>";

	echo "opdr 2";
	echo "<br>";
	echo "De opbrengst van 10 bussen is ". $bus_cost * 10 .",- Een auto brengt 3,- per dag op dus dan moet je 200,- / 3,- doen, en dan kom je uit op ". round(200 / $auto_cost)." auto's";
	echo "<br><br>";

	echo "opdr 3";
	echo "<br>";
	echo "Er mogen max 10 autobussen staan opde parkeerplaats. Dus het max aan opbrengst zou 10 autobussen zijn en de rest helemaal vol met auto's en dat zou dan ". ($auto_cost * 65 + $bus_cost * 10) .",- opbrengen.";
	echo "<br><br>";
?>