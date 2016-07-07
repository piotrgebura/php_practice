<?php

function dec_to_bin($number) {
	
	if ($number) {	
		return dec_to_bin((int)($number/2)).$number % 2;
	}
}

echo dec_to_bin(215);
?>