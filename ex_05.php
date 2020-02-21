<?php
function print_range($min) {
	$i = $min;
	do {
		echo $min++ . "\n";
	} while ($min <= 42);
	return ($i == 42) ? true : false;
}
?>
