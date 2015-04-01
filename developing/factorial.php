<?php

function  factorial($fact){
	$var = $fact;
	while ( $var > 1) {
		# code...
		$fact = $fact * ($var - 1);
		$var = $var - 1; 
	}
	return $fact;
}

echo factorial(7);

