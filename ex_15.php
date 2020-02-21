<?php
function make_it_rain(&$my_array) {
	foreach ($my_array as &$value) {
		$value = "rain";
	}
}
?>
