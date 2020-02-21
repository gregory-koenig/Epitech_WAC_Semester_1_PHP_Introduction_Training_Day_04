<?php
function get_angry_bird($nbr) {
	$piou = "";
	for ($i = 1; $i <= $nbr; $i++) {
		$piou = $piou . "piou";
	}
	return $piou . "\n";
}
?>
