<?php
function print_double_array($my_array) {
	foreach ($my_array as $value1) {
		foreach ($value1 as $value2) {
			echo $value2 . "\n";
		}
	}
}
?>
