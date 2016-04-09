<?php 
    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";

    $l = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($l, "SET CHARACTER SET UTF8") or
            die("Error, ei saa andmebaasi charsetti seatud");
    /*...siia tuleb kood teeb iga ühendusega uue sissekande
	INSERT INTO table (kaernits_counter) VALUES (1)
  	ON DUPLICATE KEY UPDATE c=c+1; */
    mysqli_close($l);
?>
