<?php

function factorial($number) {
	
	if (!$number) {
		return 1;
	} else {
		return $number * factorial($number - 1);
	}
}

echo factorial(5);

?>