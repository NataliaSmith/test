<?php 
$autoShowe = array(
		'bmw'=> array("BMW","m5", 2002, 2015),
		'Toyota'=>	array('Toyota','Corolla','2002','2015'),
		'Toyota'=>	array('Toyota','Camry','2002','2015')
		);

	print_r ($autoShowe);
	echo " $autoShowe ['bmw']  [2] [3] ['Toyota'] [3] [4] "; 
	echo " $autoShowe ['bmw']  [1] ['Toyota'] [1] [2] "; 
	echo " $autoShowe ['bmw']  [0] ['Toyota'] [0] "; 
