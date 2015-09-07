<?php

	$first_name="Rasmus";
	$last_name="Reichardt";

	//trükib välja 
	echo $first_name." ".$last_name;

?>

<br>

<?php

	$age=21;
	
	// if( loogikatehe ) { tõene} else { väär }]
	if($age<18) {
		echo "alaealine";
	} else {
		echo "täisealine";
	}
	

?>

<br>

<?php

	for($i = 0; $i < $age; $i = $i +1) {
		//see, mida korratakse
		echo "palju, ";
	}
	echo "õnne";
?>

<br>

<?php

echo date("l, j, F, Y, e ")

?>