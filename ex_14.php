<?php
function goto_is_evil() {
        $i = 0;
	loop:
	$i++;
	if ($i != 43) {
		echo "wac\n";
		goto loop;
	}
}
?>
