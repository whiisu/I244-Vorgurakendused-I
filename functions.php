<?php 

$mode="esileht"; 		
	if (isset($_GET["mode"]) && $_GET["mode"]!="") {
   	 $mode=htmlspecialchars($_GET["mode"]); 
	}
include_once "head.html";
	
switch ($mode) {
	case "esileht": include "Praktikum1_esileht.html";
	break;
	case "galerii": include "Praktikum2_galerii.html"
	break;
	case "login": include "Praktikum2_login.html";
	break;
	case "register": include "Praktikum2_registreerimine.html"
	break;
	case "pildilaadimine": include "Praktikum2_pildi_laadimine.html"
	break;
	default: include "Praktikum1_esileht.html";
	break;
}
include_once "foot.html";
?>
