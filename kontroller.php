ini_set("display_errors", 1);

<?php require_once("functions.php"); //et saaks neid funktsioone kasutada

alusta_sessioon();

$pildid=array(
  array("big"=>"../img/delfiin.jpeg", "small"=>"../thumb/delfiin_thumb.jpeg", "alt"=>"delfiin"),
  array("big"=>"../img/elevant.jpeg", "small"=>"../thumb/elevant_thumb.jpeg", "alt"=>"elevant"),
  array("big"=>"../img/kolju.jpeg", "small"=>"../thumb/kolju_thumb.jpeg", "alt"=>"kolju"),
  array("big"=>"../img/kuju.jpeg", "small"=>"../thumb/kuju_thumb.jpeg", "alt"=>"kuju"),
  array("big"=>"../img/kuul.jpeg", "small"=>"../thumb/kuul_thumb.jpeg", "alt"=>"kuul"),
  array("big"=>"../img/pea.jpeg", "small"=>"../thumb/pea_thumb.jpeg", "alt"=>"pea"),
  array("big"=>"../img/siga.jpeg", "small"=>"../thumb/siga_thumb.jpeg", "alt"=>"siga"),
  array("big"=>"../img/s�da.jpeg", "small"=>"../thumb/s�da_thumb.jpeg", "alt"=>"s�da"),
  array("big"=>"../img/t�ht.jpeg", "small"=>"../thumb/t�ht_thumb.jpeg", "alt"=>"t�ht"),	
 );
 include_once("head.html");
 include("Praktikum2_galerii.html");
 include_once("foot.html");
?>