ini_set("display_errors", 1);
<?php
	$algtekst = "Aias sadas saia.";
	echo "Algtekst: $algtekst <br>";
	$a = strlen($algtekst)-1;
	echo "peegelpildis: ";
	while ($a>=0) {
    	echo "$algtekst[$k]";
    	$a = $a - 1;
	};
?>