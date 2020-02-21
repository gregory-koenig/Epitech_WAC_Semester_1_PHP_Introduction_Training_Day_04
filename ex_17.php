<?php
function get_array_key($arr, $value) {
	foreach ($arr as $key => $value2) {
		if ($value == $value2) {
			return $key;
		}
	}
}
?>
