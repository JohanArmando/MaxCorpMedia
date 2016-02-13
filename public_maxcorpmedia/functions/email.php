<?php
$dir    = '../counter';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);
$stats  = count($files1)-2;
$stats  = number_format($stats);
//-----------------EMAIL-----------------//
$to      = 'mdiaz00147@hotmail.com';
$subject = 'Daily stats - Maxcorpmedia';
$message = "Impressions today: ".$stats;
$headers = 'From: System@maxcorpmedia.com' . "\r\n" .
'Reply-To: system@maxcorpmedia.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
//-----------------EMAIL-----------------//
echo $stats;
?>