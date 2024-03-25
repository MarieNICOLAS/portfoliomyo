<?php
$nom = "Nicolas";
$prenom = "Marie";
$email = "marie.nicolas29@hotmail.com";

$birthday = "1998-08-25";
$birthday = new DateTime($birthday);
$ajd = new  DateTime();
$dif_ajd_birthday = date_diff($birthday, $ajd);

$age = $dif_ajd_birthday->format('%Y');

?>
