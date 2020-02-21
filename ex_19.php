<?php
function break_cat() {
	$stdin = fopen("php://stdin", "r");
	while (true) {
		$text = fgets($stdin);
		if ($text == "EOF\n") {
			break;
		}
	echo $text;
	}
}
break_cat();
?>
