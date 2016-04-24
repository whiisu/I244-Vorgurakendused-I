<?php 

function alusta_sessioon(){
	// siin ees võiks muuta ka sessiooni kehtivusaega, aga see pole hetkel tähtis
	session_start();
	}
	
function lopeta_sessioon(){
	$_SESSION = array();
	if (isset($_COOKIE[session_name()])) {
 	 setcookie(session_name(), '', time()-42000, '/');
	}
	session_destroy();
}

$mode="esileht"; 		
	if (isset($_GET["mode"]) && $_GET["mode"]!="") {
   	 $mode=htmlspecialchars($_GET["mode"]); 
	}
include_once "head.html";
	
function kuva_esileht(){
	include ("Praktikum1_esileht.html");
}
function kuva_galerii(){
	include ("Praktikum2_galerii.html");
}
function kuva_login(){
	$error_login_empty_password = null;
    $error_login_empty_user = null;
    $error_login_wrong_credentials = null;
    $input_user = '';
    $input_password = '';
    if (!empty($_POST)) {
	            if ($_POST['user'] == 'kasutajanimi' && $_POST['password'] == 'parool') {
            $_SESSION['logged_in'] = true;
            $_SESSION['show_login_message'] = true;
            header('Location: ?mode=gallery');
            exit(0); 
	    }else{
		    $error_login_wrong_credentials = true;
        }
        if (empty($_POST["kasutajanimi"])) {
            $error_login_empty_user = "Sisesta kasutajanimi!";
        } else $input_user = htmlspecialchars($_POST["kasutajanimi"]);
        if (empty($_POST["parool"])) {
            $error_login_empty_password = "Sisesta parool!";
        } else $input_password = htmlspecialchars($_POST["parool"]);
        if (is_null($error_login_empty_password) && is_null($error_login_empty_user)) {
            header("Location: head.html");
            exit(0);
        }
        include ("Praktikum2_login.html");
    }else{
		include ("Praktikum2_login.html");
	}
}
function kuva_register(){
	include ("Praktikum2_registreerimine.html");
}
function kuva_pildilaadimine(){
	 $imageId = 0;
    if (isset($_GET['id'])){
        if(!is_numeric($_GET['id']) || !array_key_exists($_GET['id'],$GLOBALS['images'])){
        } else {
            $imageId = $_GET['id'];
            $activeImage = $GLOBALS['images'][$imageId];
        }
        if ($imageId == 5) $jargmine = 0;
        else $jargmine = $imageId + 1;
        if ($imageId == 0) $eelmine = 5;
        else $eelmine = $imageId - 1;
    }
	
	include ("Praktikum2_pildi_laadimine.html");
}

switch ($mode) {
	case "esileht": kuva_esileht();
	break;
	case "galerii": kuva_galerii();
	break;
	case "login": kuva_login();
	break;
	case "register": kuva_register();
	break;
	case "pildilaadimine": kuva_pildilaadimine();
	break;
	default: kuva_esileht();
	break;
}
include_once "foot.html";
?>
