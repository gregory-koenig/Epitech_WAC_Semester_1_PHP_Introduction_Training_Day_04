<?php
function continue_cat() {
	$stdin = fopen("php://stdin", "r");
	while (true) {
		$text = fgets($stdin);
		if ($text != "EOF\n") {
			echo $text;
			continue;
		}
	}
}
continue_cat();
?>
