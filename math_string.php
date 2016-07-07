<?php

function getElement($number) {
	
	if ($number == 1) {
		return -1;
	} else {
		return -getElement($number - 1) * $number - 3;
	}
}

echo getElement(1);
echo '<br />';
echo getElement(2);
echo '<br />';
echo getElement(3);
echo '<br />';
echo getElement(4);
echo '<br />';
echo getElement(5);
?>